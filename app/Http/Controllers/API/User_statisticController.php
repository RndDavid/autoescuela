<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User_statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User_statisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $id = Auth::id();
        return User_statistic::where('user_id', $id)->get();
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
        $id = Auth::id();
        $user_statistic = new User_statistic;
        $user_statistic->user_id = $id;
        $user_statistic->questions_passed = $request->questions_passed;
        $user_statistic->questions_failed = $request->questions_failed;
        $user_statistic->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User_statistic  $user_statistic
     * @return \Illuminate\Http\Response
     */
    public function show(User_statistic $user_statistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User_statistic  $user_statistic
     * @return \Illuminate\Http\Response
     */
    public function edit(User_statistic $user_statistic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_statistic  $user_statistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_statistic $user_statistic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_statistic  $user_statistic
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_statistic $user_statistic)
    {
        //
    }
}
