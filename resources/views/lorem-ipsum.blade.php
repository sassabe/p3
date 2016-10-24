@extends('layouts.master')

@section('title')
  'Lorem Ipsum'
@endsection

@section('navigation')
@endsection

@section('content')
<h1>Lorem Ipsum Generator</h1>
<form method='POST' action='/lorem-ipsum'>
    {{ csrf_field() }}
    Number of paragraphs? <input type='number' name='lAmount' value='{{old("lAmount")}}'>
    <button type='submit' value='Create text!'>Create text!</button>
    @if(count($errors) > 0)
    <ul class="error">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif
</form>

@endsection
