@extends('layouts.main')

@section( 'title', 'My movies')

@section('content')
<div class="container">
    <h1 class="text-center">{{env('APP_NAME')}}</h1>
    <p class="text-center"> Benvenuti sul nostro sito di film </p>

    <div class="row">
        <div class="row gy-3">
            @foreach ($movies as $movie)
            <div class="col-4 text-center border border-2">
                <div class="p-3">
                    <h2><a href="{{route('movies.show', ['id' => $movie->id])}}"> {{$movie->title}} </a></h2>
                    <h5>{{$movie->original_title}}</h5>
                    <address>- {{$movie->nationality}} -</address>
                    <div> {{date("M d Y", strtotime($movie->date))}}</div>
                    <div>{{$movie->vote}}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection