<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResultAll;
use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('results.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Results.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Number $number
     * @return \Illuminate\Http\Response
     */
    public function store(ResultAll $request, Result $result)
    {
        $result->create($request->all());
        return redirect()->route('results.index')->with('success', 'Тип номера успешно добавлен.');
    }

    public function show($id)
    {
        $result = result::findOrFail($id);
        return view('results.show', compact('result'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::findOrFail($id);
        return view('results.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResultAll $request, $id)
    {
        $result = Result::find($id);
        $result->update($request->all());
        return redirect()->route('results.index')->with('success', 'Тип номера успешно обновлен.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::find($id);
        $result->delete();
        return redirect()->route('results.index')->with('success', 'Тип номера успешно удален.');
    }
}
