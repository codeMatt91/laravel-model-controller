@extends('layouts.main')

@section('title', 'Selected Movie')

@section('content')

<div class="container">
        <div class="card text-center">
            <div class="p-3">
                <h2>{{$movie->title}}</h2>
                <h5>{{$movie->original_title}}</h5>
                <div class="fst-italic">- {{$movie->nationality}} -</div>
                <div> {{date("M d Y", strtotime($movie->date))}}</div>
                <div>
                    @include('includes.stars_logic')
                </div>
            </div>
        </div>
</div>

@endsection