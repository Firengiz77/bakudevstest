<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAll_UsersRequest;
use App\Http\Requests\UpdateAll_UsersRequest;
use App\Models\All_Users;

class AllUsersController extends Controller
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
     * @param  \App\Http\Requests\StoreAll_UsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAll_UsersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\All_Users  $all_Users
     * @return \Illuminate\Http\Response
     */
    public function show(All_Users $all_Users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\All_Users  $all_Users
     * @return \Illuminate\Http\Response
     */
    public function edit(All_Users $all_Users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAll_UsersRequest  $request
     * @param  \App\Models\All_Users  $all_Users
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAll_UsersRequest $request, All_Users $all_Users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\All_Users  $all_Users
     * @return \Illuminate\Http\Response
     */
    public function destroy(All_Users $all_Users)
    {
        //
    }
}
