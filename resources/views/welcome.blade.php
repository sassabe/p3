@extends('layouts.master')

@section('navigation')
@endsection

@section('content')
            <div class="content">
                <h1>Developer's Best Friend</h1>
                <h4>Two helpful tools for web developers to get placeholder text (lorem ipsum) or create random users.</h4>

                <div class="links">
                    <a href="/lorem-ipsum/create">Lorem Ipsum Generator</a>
                    <a href="/random-user/create">Random User Generator</a>
                </div>
                <div class="image">
                  <img src="images/bestfriend.jpg" alt="dog">
                </div>
            </div>
@endsection
