@extends('app')
@section('section')
    <div class="text-center">
        <h1>Hello{{ auth()->user() ? ', '. auth()->user()->name : '' }}</h1>
        <p>Welcome to the Home</p>
    </div>
@endsection
