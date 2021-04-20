@extends('app')
@section('section')
    <div class="text-center">
        <h1>Hello{{ auth()->user() ? ', '. auth()->user()->name : '' }}</h1>
        <p>Welcome to the Home</p>
        @auth
        <div>
            <a href="{{ route('invoices.create') }}" class="btn btn-primary">Create Invoice</a>
        </div>

        {{-- Responsive Tables --}}
        <div class="table-responsive mt-5">
                <table class="table table-bordered">
                    <tr>
                        <th>Invoice Date</th>
                        <th>Invoice Number</th>
                        <th>Customer</th>
                        <th>Total Amount</th>
                    </tr>
                    @foreach($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->invoice_date }}</td>
                            <td>{{ $invoice->invoice_number }}</td>
                            <td>{{ $invoice->customer->name }}</td>
                            <td>{{ number_format($invoice->total_amount, 2) }}</td>
                        </tr>
                    @endforeach
                </table>
        </div>
        @endauth
    </div>
@endsection
