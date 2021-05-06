@extends('app')
@section('section')
    <div class="app-box" style="max-width: 1300px;">
        <div class="text-center">
            <h1>Hello{{ auth()->user() ? ', '. auth()->user()->name : '' }}</h1>
            <p>Do you want to add a new product?</p>
            @auth
                <div>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Add new Product</a>
                </div>
                    {{-- Responsive Tables --}}
                    <div class="table-responsive mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price ({{ config('invoices.currency') }})</th>
                            </tr>
                            @forelse($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No products found.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
            @endauth
        </div>
    </div>
@endsection
