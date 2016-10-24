@extends('layouts.master')

@section('title')
'Random User'
@endsection

@section('navigation')
@endsection

@section('content')
<h1>Random User Generator</h1>
<form method='POST' action='/random-user'>
    {{ csrf_field() }}
    <div class="field-row">How many users? <input type='number' name='users' value='{{old("users")}}'></div>
    <div class="field-row">Add numbers? <input type='checkbox' name='uNumbers' value='{{old("uNumbers")}}'></div>
    <div class="field-row">Username length (min 5 characters)? <input type='text' name='length' value='{{old("length")}}'></div>
    <button type='submit' value='Get users!'>Get users!</button>



    @if(count($errors) > 0)
    <ul class="error">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif
</form>

@endsection
