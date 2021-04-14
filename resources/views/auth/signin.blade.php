@extends('app')
@section('section')
    <main>
        @if (session('status'))
            <div class="alert alert-danger mb-2" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('signin') }}" method="POST">
            <div class="mb-2">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email')}}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="password">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" value="">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- When you dd($request->remember) returns "ok" if not return null --}}
            <div class="mb-2">
                <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" id="remember">
                    <label class="form-check-label" for="remember">
                       Remember me
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            @csrf
        </form>
    </main>
@endsection
