<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = [
           'Category' => "Comedy",
            'Movies' => Movie::where('Category', 'Comedy')->get()
       ];
       return $data;
    }

    public function adminIndex(){
        $movies = Movie::all();
        return view('movies/index', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $movie = new Movie();

        if ($request->hasFile('Img')) {
            if ($request->file('Img')->isValid())
            {
                $fileName = $request->file('Img')->getClientOriginalName();
                $fileName = str_replace(" ", "", $fileName);
                $request->file('Img')->move(base_path()."/public/images/thumbs/", $fileName);
                $movie->Img = $fileName;
            }else{
                die('Error Upload 1');
            }
        }else{
            die('Error Upload 2');
        }



        if ($request->hasFile('Video')) {
            if ($request->file('Video')->isValid())
            {
                $fileName = $request->file('Video')->getClientOriginalName();
                $fileName = str_replace(" ", "", $fileName);
                echo $fileName;
                $request->file('Video')->move(base_path()."/public/videos/", $fileName);
                $movie->Video = $fileName;
            }else{
                die('Error Upload 1');
            }
        }else{
            die('Error Upload 2');
        }

        $movie->Title = $request->Title;
        $movie->Category = $request->Category;

        $movie->save();


        return redirect('/admin/movies');
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
        $movie = Movie::find($id);
        return view('movies/update', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $m = Movie::findorFail($request->id);

        $m->Title = $request->Title;
        $m->Category = $request->Category;

        $m->save();


//        $movie = \App\Movie::find(1);
//
//        $movie->Title = "TESTING!"; //$request->title;
//        //$movie->Category = $request->Category;
//        echo $movie->save();
        //var_dump($movie);
        return \Redirect::to('/admin/movies/update/'.$request->id)->with('message', 'Movie Updated');

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
