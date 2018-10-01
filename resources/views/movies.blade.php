@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>Movies</h1>
          @foreach ($movies as $movie)
            <div class="card" style="margin-bottom: 10px;">
                <div class="card-header">{{ $movie->movieTitle}}</div>
                <div class="card-body">
                  {{$movie->Year}}, {{$movie->categoryName}}
                  <a href="/movies/{{$movie->movieID}}">klicka</a>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
