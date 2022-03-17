@extends('layouts.main')

@section('title', 'Selected Movie')

@section('content')

<div class="container">
        <div class="card text-center">
            <div class="p-3">
                <h2>{{$movie->title}}</h2>
                <h5>{{$movie->original_title}}</h5>
                <address>- {{$movie->nationality}} -</address>
                <div> {{date("M d Y", strtotime($movie->date))}}</div>
                <div>{{$movie->vote}}</div>
            </div>
        </div>
</div>

@endsection