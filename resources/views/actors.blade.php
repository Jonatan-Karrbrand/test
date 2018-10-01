@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>Actors</h1>
          @foreach ($actors as $actor)
            <div class="card" style="margin-bottom: 10px;">
                <div class="card-header">{{ $actor->actorName}}</div>
                <div class="card-body">
                  Born {{$actor->birthday}} in {{$actor->country}}
                  <a href="/actors/{{$actor->ID}}">klicka</a>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
