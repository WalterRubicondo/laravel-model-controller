@extends('layouts.app')

@section('main')
<main>
    <div class="showcase">
        @foreach ($movies as $movie)
        <div class="card">
              <img class="poster" src='./img/placeholder.jpg' alt="Poster film">
            <div class="info">
                <span class="title"> {{$movie->title}} </span>
                <span class="originalTitle"> {{$movie->original_title}} </span>
                <span class="nationality"> {{$movie->nationality}} </span>
                <span class="date"> {{ date('M j, Y', strtotime($movie->date))}} </span>
                <span class="vote"> Vote: {{$movie->vote}} </span>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection