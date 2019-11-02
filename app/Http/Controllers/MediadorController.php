<?php

namespace App\Http\Controllers;

use App\Mediador;
use Illuminate\Http\Request;

class MediadorController extends Controller
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
    public function create(User $user)
    {
       //
       Mediador::create();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mediador  $mediador
     * @return \Illuminate\Http\Response
     */
    public function show(Mediador $mediador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mediador  $mediador
     * @return \Illuminate\Http\Response
     */
    public function edit(Mediador $mediador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mediador  $mediador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mediador $mediador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mediador  $mediador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mediador $mediador)
    {
        //
    }
}
