@extends('layouts.main')

@section( 'title', 'My movies')

@section('content')
<div class="container">
    <h1>{{env('APP_NAME')}}</h1>
    <p> Benvenuti sul nostro sito di film </p>
</div>
@endsection