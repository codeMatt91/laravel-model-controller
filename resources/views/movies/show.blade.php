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
                <div>
                    @for ($i = 1; $i <= floor($movie->vote/2); $i++)
                        <i class="fas fa-star"></i>   
                    @endfor
                    @for ($i = 1; $i <= floor(6 - ($movie->vote/2)); $i++)
                        <i class="far fa-star"></i>   
                        @endfor
                </div>
            </div>
        </div>
</div>

@endsection