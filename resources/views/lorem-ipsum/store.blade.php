@extends('layouts.master')

@section('title')
  'Lorem Ipsum'
@endsection

@section('navigation')
@endsection


@section('content')
<h1>Lorem Ipsum Generator</h1>
    <div class ="lorem-output"> <code> {{ $text }} </code> </div>

    <p class="more-text"><a href='/lorem-ipsum/create'>Get more random text!</a></p>
@endsection
