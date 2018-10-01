<?php
// Controller
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actors;

class ActorsController extends Controller
{
  public function index() {
    $actors = Actors::getAllActors();

    return view('actors', [
      'actors' => $actors
    ]);
  }
  public function show($id) {
    $oneActor = Actors::getOneActor($id);

    return view('singleActor', [
      'actors' => $oneActor
    ]);
  }

  public function addActor(Request $request)  {
    Actors::insert($request);
  }
}
