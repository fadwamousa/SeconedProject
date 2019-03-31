<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Song;
class songsContoller extends Controller
{
    
    public function index()
    {
        $songs = \App\Song::all();
        return view('songs.index',compact('songs'));
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        
        return view('songs.show',compact('song'));
    }
    //now we use Elqouent Model Binding

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
