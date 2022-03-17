@extends('layouts.main')

@section( 'title', 'My movies')

@section('content')
<div class="container">
    <h1 class="text-center">{{env('APP_NAME')}}</h1>
    <p class="text-center"> Benvenuti sul nostro sito di film </p>

    <div class="row">
        <div class="col">
            <h1>title</h1>
            <h4>original title</h4>
            <address>- nationality -</address>
            <div> date</div>
            <div>vote</div>
        </div>
    </div>
</div>
@endsection