<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStatusRequest;
use App\Models\TaskStatus;
use Illuminate\Http\Request;

class TaskStatusController extends Controller
{
    //TODO: привязать модель к ресурсу
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = TaskStatus::all();

        return view('status.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('status.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $status = TaskStatus::findOrFail($id);

        return view('status.edit', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStatusRequest $request)
    {
        //TODO: использовать валидацию через Request
        $data = $request->input();
        $status = new TaskStatus();
        $status->fill($data);

        $status->save();

        flash(__('messages.status.store'))->success();

        return redirect()
            ->route('task_statuses.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskStatusRequest $request, string $id)
    {
        $data = $request->validated();
        $status = TaskStatus::findOrFail($id);

        $status->fill($data);
        $status->save();

        flash(__('messages.status.update'))->success();

        return redirect()->route('task_statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $taskStatus = TaskStatus::findOrFail($id);
        $tasks = $taskStatus->tasks;

        if (!$tasks->isEmpty()) {
            flash(__('messages.status.delete_forbidden'))->error();

            return redirect()->route('task_statuses.index');
        }

        $taskStatus->delete();

        flash(__('messages.status.delete'))->info();

        return redirect()->route('task_statuses.index');
    }
}
