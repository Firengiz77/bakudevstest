<?php

namespace App\Http\Controllers;

use App\Models\Dersler;
use App\Http\Requests\StoreDerslerRequest;
use App\Http\Requests\UpdateDerslerRequest;

class DerslerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDerslerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDerslerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dersler  $dersler
     * @return \Illuminate\Http\Response
     */
    public function show(Dersler $dersler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dersler  $dersler
     * @return \Illuminate\Http\Response
     */
    public function edit(Dersler $dersler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDerslerRequest  $request
     * @param  \App\Models\Dersler  $dersler
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDerslerRequest $request, Dersler $dersler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dersler  $dersler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dersler $dersler)
    {
        //
    }
}
