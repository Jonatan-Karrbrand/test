@extends('layouts.app')

<?php
  $newMovies = json_decode(json_encode($movies), true);
  $movieName = $newMovies[0]['movieTitle'];
?>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1><?php echo $movieName; ?></h1>
          @foreach ($movies as $movie)
            <div class="card" style="margin-bottom: 10px;">
                <div class="card-header"></div>
                <div class="card-body">
                  {{$movie->Year}}, {{$movie->categoryName}}
                  <?php
                    $newActors = json_decode(json_encode($thisMovieActors), true);
                    foreach ($newActors as $key => $value) {
                      echo $newActors[$key]['actorName'] . ', ';
                    }
                  ?>
                </div>
              </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
