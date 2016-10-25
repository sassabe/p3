@extends('layouts.master')

@section('title')
  'Lorem Ipsum'
@endsection

@section('navigation')
@endsection


@section('content')
<h1>Lorem Ipsum Generator</h1>
     {{ $text }}

    <p><a href='/lorem-ipsum/create'>Get more random text!</a></p>
@endsection
