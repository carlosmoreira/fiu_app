<?php

namespace App\Http\Controllers;

use App\MovieSelection;
use App\Result;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResultController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = new Result();
        $result->firstName = $request['user']['firstName'];
        $result->lastName = $request['user']['lastName'];
        $result->email = $request['user']['email'];
        $result->movies = "";

        //Turn the movies array into a string if needed

        $result->save();

        $pos = 1;
        foreach($request['movies'] as $movie){
            $movieSelection = new MovieSelection();
            $movieSelection->result_id = $result->id;
            $movieSelection->movie_id = $movie['id'];
            $movieSelection->played = (isset($movie['played'])) ? 1 : 0;
            $movieSelection->watched_length = (isset($movie['watched_length'])) ? $movie['watched_length'] : 0;
            $movieSelection->position = $pos;
            $movieSelection->playedPosition = (isset($movie['playedPosition'])) ? $movie['playedPosition'] : null;
            $movieSelection->save();
            $pos++;
        }


        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
