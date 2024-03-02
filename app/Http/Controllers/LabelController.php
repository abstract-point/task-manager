<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabelRequest;
use App\Http\Requests\UpdateLabelRequest;
use App\Models\Label;
use function PHPUnit\Framework\isEmpty;

class LabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labels = Label::all();

        return view('label.index', compact('labels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('label.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLabelRequest $request)
    {
        $data = $request->validated();

        Label::factory()->create($data);

        flash(__('messages.label.store'))->success();

        return redirect()->route('labels.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Label $label)
    {
        return view('label.edit', compact('label'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLabelRequest $request, Label $label)
    {
        $data = $request->validated();
        $label->fill($data);
        $label->save();

        flash(__('messages.label.update'))->success();

        return redirect()->route('labels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Label $label)
    {
        if (!$label->tasks->isEmpty()) {
            flash(__('messages.label.delete_forbidden'))->warning();

            return redirect()->route('labels.index');
        }

        $label->delete();

        flash(__('messages.label.delete'))->info();

        return redirect()->route('labels.index');
    }
}
