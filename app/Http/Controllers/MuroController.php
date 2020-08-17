<?php

namespace App\Http\Controllers;

use App\Muro;
use App\User;
use Illuminate\Http\Request;

class MuroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return User::with(['desafios'])->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Muro  $muro
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        return User::with(['desafios'])->find(102);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Muro  $muro
     * @return \Illuminate\Http\Response
     */
    public function edit(Muro $muro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Muro  $muro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muro $muro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Muro  $muro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muro $muro)
    {
        //
    }
}
