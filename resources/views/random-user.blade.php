@extends('layouts.master')

@section('title')
'Random User'
@endsection

@section('navigation')
@endsection

@section('content')
<h1>Random User Generator</h1>
<h4>Specify how many users you want. This tool will generate a list of random names, accompanied by email, username and password.</h4>
<form method='POST' action='/random-user'>
    {{ csrf_field() }}
    <div class="field-row">How many users? <input type='text' name='users' maxlength="2" value='{{old("users")}}'></div>
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
