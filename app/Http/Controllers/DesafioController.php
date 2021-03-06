<?php

namespace App\Http\Controllers;

use App\Avance;
use App\Desafio;
use App\DesInsta;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesafioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indDesafio(){
        return DesInsta::where('id_user',Auth::id());
    }
    public function index()
    {
        $insta=DesInsta::where('id_user',Auth::id());
        return view('desafios.index',compact('insta'));
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
       Avance::create([
            "id_desafio"=>$request->id,
            "id_user"=>Auth::id()
        ]);
       $insta=DesInsta::create([ "id_desafio"=>$request->id,"id_user"=>Auth::id(),"link_insta"=>$request->link_insta]);
       return $insta;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function show(  $id)
    {
        $data=explode("-",$id);
        return Desafio::where([['tipo',"=",$data[1]],["n_cofre","=",$data[0]]])->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function edit(Desafio $desafio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desafio $desafio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desafio $desafio)
    {
        //
    }
}
