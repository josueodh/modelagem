<?php

namespace App\Http\Controllers;

use App\Warning;
use Illuminate\Http\Request;

class WarningController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Warning::class, 'warning');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warnings = Warning::all();
        return view('warnings.index', compact('warnings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warning = new Warning();
        return view('warnings.create', compact('warning'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Warning::create($request->all());
        return redirect()->route('warnings.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warning  $warning
     * @return \Illuminate\Http\Response
     */
    public function show(Warning $warning)
    {
        return view('warnings.show', compact('warning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warning  $warning
     * @return \Illuminate\Http\Response
     */
    public function edit(Warning $warning)
    {
        return view('warnings.edit', compact('warning'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warning  $warning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warning $warning)
    {
        $warning->update($request->all());
        return redirect()->route('warnings.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warning  $warning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warning $warning)
    {
        $warning->delete();
        return redirect()->route('warnings.index')->with('success', true);
    }
}
