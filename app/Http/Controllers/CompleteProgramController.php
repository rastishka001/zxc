<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompleteProgramAll;
use Illuminate\Http\Request;
use App\Models\CompleteProgram;

class CompleteProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $completePrograms = CompleteProgram::all();
        return view('CompletePrograms.index', compact('completePrograms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CompletePrograms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Number $number
     * @return \Illuminate\Http\Response
     */

    public function store(CompleteProgramAll $request, CompleteProgram $completeProgram)
    {
        $completeProgram->create($request->all());
        return redirect()->route('CompletePrograms.index')->with('success', 'Тип номера успешно добавлен.');
    }

    public function show($id)
    {
        $completeProgram = CompleteProgram::findOrFail($id);
        return view('CompletePrograms.show', compact('completeProgram'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $completeProgram = CompleteProgram::findOrFail($id);
        return view('CompletePrograms.edit', compact('completeProgram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompleteProgramAll $request, $id)
    {
        $completeProgram = CompleteProgram::find($id);
        $completeProgram->update($request->all());
        return redirect()->route('CompletePrograms.index')->with('success', 'Тип номера успешно обновлен.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $completeProgram = CompleteProgram::find($id);
        $completeProgram->delete();
        return redirect()->route('CompletePrograms.index')->with('success', 'Тип номера успешно удален.');
    }
}
