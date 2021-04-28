@extends('app')
@section('section')
    <div class="app-box" style="max-width: 1300px;">
        <div class="text-center">
            <h1>Hello{{ auth()->user() ? ', '. auth()->user()->name : '' }}</h1>
            <p>Do you want to add new customer?</p>
            @auth
                <div>
                    <a href="{{ route('customers.create') }}" class="btn btn-primary">Add new Customer</a>
                </div>

                @if (count($customers) > 0)
                    {{-- Responsive Tables --}}
                    <div class="table-responsive mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Postcode</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->postcode }}</td>
                                    <td>{{ $customer->city }}</td>
                                    <td>{{ $customer->state }}</td>
                                    <td>{{ $customer->country }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->email }}</td>
                                    {{-- We don't want to delete the customer whole database and
                                     invoice will be affected!  --}}
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endif
            @endauth
        </div>
    </div>
@endsection
