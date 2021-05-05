@extends('app')
@section('section')
    <div class="app-box" style="max-width: 560px;">
        <h1>Create Products</h1>
        <form action="{{ route('products.store') }}" method="POST">
            {{--  Portion 1   --}}
            <div class="row mb-4">

                {{-- Customer Details --}}
                <div class="col">
                    {{-- Fields --}}
                    <div class="mb-4">
                        <label for="name">Name *:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="price">Price *:</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') }}">
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save Product</button>
            @csrf
        </form>
    </div>
@endsection
