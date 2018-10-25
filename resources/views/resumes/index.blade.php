@extends('layout')

@section('content')

    <div class="container contact-form">
        <h2 align="center">Fill in resume</h2>
        {!! Form::open(['route' => ['store']]) !!}

        {!! Form::close() !!}
    </div>

@endsection
