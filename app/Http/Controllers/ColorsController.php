<?php

namespace App\Http\Controllers;

use App\Colors;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Colors::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Colors::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Colors  $colors
     * @return \Illuminate\Http\Response
     */
    public function show(Colors $colors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colors  $colors
     * @return \Illuminate\Http\Response
     */
    public function edit(Colors $colors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colors  $colors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colors $colors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colors  $colors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colors $colors)
    {
        //
    }
}
