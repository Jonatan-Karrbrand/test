@extends('layouts.app')

<?php
  $newactors = json_decode(json_encode($actors), true);
  $actorName = $newactors[0]['actorName'];
?>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1><?php echo $actorName; ?></h1>
          @foreach ($actors as $actor)
            <div class="card" style="margin-bottom: 10px;">
                <div class="card-header"></div>
                <div class="card-body">
                  Born {{$actor->birthday}} in {{$actor->country}}
                </div>
              </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
