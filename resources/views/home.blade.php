@extends('app')
@section('section')
 <div class="app-box" style="max-width: 876px;">
    <div class="text-center">
        <h1>Hello{{ auth()->user() ? ', '. auth()->user()->name : '' }}</h1>
        <p>Welcome to the Home</p>
        @auth
        <div>
            <a href="{{ route('invoices.create') }}" class="btn btn-primary">Create Invoice</a>
        </div>

        @if (count($invoices) > 0)
            {{-- Responsive Tables --}}
            <div class="table-responsive mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <th>Invoice Date</th>
                            <th>Invoice Number</th>
                            <th>Customer</th>
                            <th>Total Amount</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->invoice_date }}</td>
                                <td>{{ $invoice->invoice_number }}</td>
                                <td>{{ $invoice->customer->name }}</td>
                                <td>{{ number_format($invoice->total_amount, 2) }}</td>
                                <td>
                                    <a href="{{ route('invoices.show', $invoice->id) }}" class="btn btn-primary">View Invoice</a>
                                </td>

                                <td>
                                    <a href="{{ route('invoices.download', $invoice->id) }}" class="btn btn-secondary">Download PDF</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
            </div>
         @endif
        @endauth
    </div>
 </div>
@endsection
