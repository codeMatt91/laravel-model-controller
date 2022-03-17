@extends('layouts.main')

@section( 'title', 'My movies')

@section('content')
<div class="container">
    <h1 class="text-center">{{env('APP_NAME')}}</h1>
    <p class="text-center"> Benvenuti sul nostro sito di film </p>
</div>
@endsection