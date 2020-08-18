<?php

namespace App\Http\Controllers;

use App\Avance;
use App\videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=["1"=>Avance::where([['id_desafio',"=",1],["id_user","=",Auth::id()]])->first(),"2"=>Avance::where([['id_desafio',"=",2],["id_user","=",Auth::id()]])->first(),"3"=>Avance::where([['id_desafio',"=",3],["id_user","=",Auth::id()]])->first()];
        return view('videos.videos',compact('videos'));
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
        $avance= Avance::firstOrNew([
            "id_desafio"=>$request->id,
            "id_user"=>Auth::id()
        ]);
        $avance->save();
        return $avance;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function show(videos $videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit(videos $videos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, videos $videos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function destroy(videos $videos)
    {
        //
    }
}
