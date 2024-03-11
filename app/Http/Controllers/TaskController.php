<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Label;
use App\Models\Task;
use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $taskStatuses = TaskStatus::all();
        $users = User::all();
        $performers = $users;
        $filterData = $request->input('filter');

        $tasks = QueryBuilder::for(Task::class)
            ->allowedFilters([
                AllowedFilter::exact('status_id'),
                AllowedFilter::exact('created_by_id'),
                AllowedFilter::exact('assigned_to_id'),
            ])
            ->paginate(10);

        return view('task.index', compact('tasks', 'taskStatuses', 'users', 'performers', 'filterData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $taskStatuses = TaskStatus::all();
        $labels = Label::all();
        $users = User::all();

        return view('task.create', compact('taskStatuses', 'users', 'labels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $data = $request->validated();
        $taskData = collect($data)->except(['labels'])->toArray();
        $labelsData = $data['labels'] ?? [];

        if (in_array(null, $labelsData, true)) {
            unset($labelsData[0]);
        }

        $task = Task::factory()->make($taskData);
        $task->creator()->associate(Auth::user());
        $task->save();
        $task->labels()->attach($labelsData);

        flash(__('messages.task.store'))->success();

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $taskStatuses = TaskStatus::all();
        $labels = Label::all();
        $users = User::all();

        return view('task.edit', compact('task', 'taskStatuses', 'users', 'labels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $data = $request->validated();
        $taskData = collect($data)->except(['labels'])->toArray();
        $labelsData = $data['labels'] ?? [];

        if (in_array(null, $labelsData, true)) {
            unset($labelsData[0]);
        }

        $task->fill($taskData);
        $task->labels()->sync($labelsData);
        $task->save();

        flash(__('messages.task.update'))->success();

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        if (Auth::user() === null || $task->creator === null) {
            return redirect()->route('login');
        }

        if (Auth::user()->id !== $task->creator->id) {
            flash(__('messages.task.delete_forbidden'))->error();

            return redirect()->route('tasks.index');
        }

        $task->labels()->detach();
        $task->delete();
        flash(__('messages.task.delete'))->info();

        return redirect()->route('tasks.index');
    }
}
