<?php

namespace App\Http\Controllers;

use App\Models\Kpm;
use App\Http\Requests\StoreKpmRequest;
use App\Http\Requests\UpdateKpmRequest;

class KpmController extends Controller
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
     * @param  \App\Http\Requests\StoreKpmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKpmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpm  $kpm
     * @return \Illuminate\Http\Response
     */
    public function show(Kpm $kpm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpm  $kpm
     * @return \Illuminate\Http\Response
     */
    public function edit(Kpm $kpm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKpmRequest  $request
     * @param  \App\Models\Kpm  $kpm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKpmRequest $request, Kpm $kpm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpm  $kpm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpm $kpm)
    {
        //
    }
}
