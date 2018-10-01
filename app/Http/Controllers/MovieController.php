<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Hänvisar till att det finns en Model som heter Movie som ska användas
use App\Movie;

use DB;

class MovieController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    /*
    $movies = Movie::all();
    return view('movies', [
     'movies' => $movies
    ]);
    */
    $movies = Movie::getAllMovies();
    $movieActors = Movie::movieActors();

    return view('movies', [
      'movies' => $movies,
      'movieActors' => $movieActors
    ]);
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
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $movie = Movie::getOneMovie($id);
    $thisMovieActors = Movie::thisMovieActors($id);

    return view('singleMovie', [
     'movies' => $movie,
     'thisMovieActors' => $thisMovieActors
    ]);

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
