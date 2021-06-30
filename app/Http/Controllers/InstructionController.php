<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructions = Instruction::all();

        return view('index', compact('instructions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = (is_null(old('date'))) ? date('Y-m-d') : old('date');

        return view('create', compact('today'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'date' => 'required|unique:instructions',
        ],[
            'content.required' => '指示内容は必須です。',
            'date.required' => '日付は必須です。',
            'date.unique' => '登録済みの日付です。'
        ]);

        $instruction = new Instruction();
        $instruction->content = $request->content;
        $instruction->date = $request->date;
        $instruction->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function show(Instruction $instruction)
    {
        return view('show', compact('instruction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function edit(Instruction $instruction)
    {
        return view('edit', compact('instruction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instruction $instruction)
    {
        $request->validate([
            'content' => 'required',
        ], [
            'content.required' => '指示内容は必須です。',
        ]);

        $instruction = Instruction::findOrFail($instruction->id);
        $instruction->content = $request->content;
        $instruction->save();

        return redirect()->route('show', ['instruction' => $instruction]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instruction $instruction)
    {
        //
    }
}
