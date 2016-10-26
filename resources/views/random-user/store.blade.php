@extends('layouts.master')

@section('title')
  Random User
@endsection

@section('navigation')
@endsection


@section('content')
<h1>Random User Generator</h1>

    <section class="user-output"> {!! $output !!} </section>

    <p class="more-text"><a href='/random-user/create'>Get more random users!</a></p>
@endsection
