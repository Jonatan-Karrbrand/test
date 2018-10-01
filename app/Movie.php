<?php
// Detta är en model
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Movie extends Model
{
  protected $primaryKey = "movieID";
  public $timestamps = false;

  public static function getAllMovies() {
    //Self hänvisar till sig själv, Movie i det här fallet
    //$movies = Self::all();

    $movies = DB::table('movies')
      ->select('movies.movieID', 'movies.movieTitle', 'movies.Year', 'categories.categoryName')
      ->join('categories', 'movies.movieID', 'categories.categoryID' )
      ->get();

    return $movies;
  }
  public static function movieActors() {
    $thisMovieActors = DB::table('movies')
        ->select('actors.actorName')
        ->join('categories', 'movies.movieID', 'categories.categoryID' )

        ->join('actorspermovie', 'movies.movieID', 'actorspermovie.movie')

        ->join('actors', 'actorspermovie.actor', 'actors.ID')

        ->get();

    return $thisMovieActors;
  }

  public static function getOneMovie($id) {
    $movie = DB::table('movies')
        ->select('movies.movieTitle', 'movies.Year', 'categories.categoryName')
        ->join('categories', 'movies.movieID', 'categories.categoryID' )

        ->join('actorspermovie', 'movies.movieID', 'actorspermovie.movie')

        ->join('actors', 'actorspermovie.actor', 'actors.ID')

        ->limit('1')

        ->where('movieID', $id)
        ->get();

    return $movie;
  }

  public static function thisMovieActors($id) {
    $thisMovieActors = DB::table('movies')
        ->select('actors.actorName')
        ->join('categories', 'movies.movieID', 'categories.categoryID' )

        ->join('actorspermovie', 'movies.movieID', 'actorspermovie.movie')

        ->join('actors', 'actorspermovie.actor', 'actors.ID')

        ->where('movieID', $id)
        ->get();

    return $thisMovieActors;
  }
}
