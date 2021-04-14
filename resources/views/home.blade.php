@extends('app')
@section('section')
    <div class="text-center">
        <h1>Hello{{ auth()->user() ? ', '. auth()->user()->name : '' }}</h1>
        <p>Welcome to the Home</p>
        @auth
        <div>
            <a href="{{ route('invoices.create') }}" class="btn btn-primary">Create Invoice</a>
        </div>
        @endauth
    </div>
@endsection
