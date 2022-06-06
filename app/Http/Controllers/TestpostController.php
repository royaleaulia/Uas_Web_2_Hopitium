<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretestpostRequest;
use App\Http\Requests\UpdatetestpostRequest;
use App\Models\testpost;

class TestpostController extends Controller
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
     * @param  \App\Http\Requests\StoretestpostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretestpostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testpost  $testpost
     * @return \Illuminate\Http\Response
     */
    public function show(testpost $testpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testpost  $testpost
     * @return \Illuminate\Http\Response
     */
    public function edit(testpost $testpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetestpostRequest  $request
     * @param  \App\Models\testpost  $testpost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetestpostRequest $request, testpost $testpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testpost  $testpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(testpost $testpost)
    {
        //
    }
}
