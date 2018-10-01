<?php
// Modell
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Actors extends Model
{
  public static function getAllActors() {
    $actors = Self::all();

    return $actors;
  }
  public static function getOneActor($id)  {
    $getOneActor = DB::table('actors')
      ->where('id', $id)
      ->get();
    return $getOneActor;
  }
  public function addActor($request) {
    DB::table('actors')->insert([
      'actorName' => 'Kalle',
      'birthday' => 1990-01-01,
      'country' => 'Sverige'
    ]);
  }
}
