@extends('app')
@section('section')

       @if(config('invoices.logo_file') !== '')
        <div class="text-center mb-4">
            <img src="{{config('invoices.logo_file')}}"  alt="Seller Logo" />
        </div>
       @endif

    <h4 class="text-center">Invoice number {{ $invoice->invoice_number }}</h4>
    <h4 class="text-center">{{ $invoice->invoice_date }}</h4>

    <div class="mt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <h4 class="mt-3">Customer Details</h4>

                    <p class="mt-3">To: {{ $invoice->customer->name }}</p>

                    <p>
                        Address: {{ $invoice->customer->address }},

                        @if($invoice->customer->postcode !== '')
                            {{ $invoice->customer->postcode }},
                        @endif

                        {{ $invoice->customer->city }},

                        @if($invoice->customer->state !== '')
                            {{ $invoice->customer->state }},
                        @endif

                        {{ $invoice->customer->country }}
                    </p>

                    @if ($invoice->customer->phone !== '')
                        <p>Phone: {{ $invoice->customer->phone }}</p>
                    @endif

                    @if ($invoice->customer->email !== '')
                        <p>Phone: {{ $invoice->customer->email }}</p>
                    @endif

                     {{-- Relation Additional fields invoices_items --}}
                    @if ($invoice->customer->customers_fields)
                        @foreach($invoice->customer->customers_fields as $field)
                            <p>{{ $field->field_key }}: {{ $field->field_value }}</p>
                        @endforeach
                    @endif
                </div>

                <div class="col-md-4 offset-md-4">
                    <h4 class="mt-3">Seller Details</h4>
                    <p>From: {{ config('invoices.seller.name') }}</p>
                    <p>Address: {{ config('invoices.seller.address') }}</p>
                    @if (config('invoices.seller.email') !== '')
                        <p>Email: {{ config('invoices.seller.email') }}</p>
                    @endif
                    {{-- The is_array() function checks whether a variable is an array or not. --}}
                    @if(is_array(config('invoices.seller.additional_info')))
                        @foreach(config('invoices.seller.additional_info') as $key => $value)
                            <p>{{ $key }}: {{ $value }}</p>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{--  Table for Invoices_items  --}}
    @if (count($invoice->invoices_items) > 0)
        <div class="table-responsive mt-5">
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
                {{--  Because of hasMany Relationship --}}
                @foreach($invoice->invoices_items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ number_format($item->quantity) }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ number_format($item->quantity * $item->price, 2) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif



    {{--  Calculation Area --}}
    <div class="table-responsive mt-5">
        <table class="table table-bordered">
            <tr>
                <th>Sub Total</th>
                <td>{{ number_format($invoice->total_amount, 2) }}</td>
            </tr>
            <tr>
                <th>Tax</th>
                <td>{{ $invoice->tax_percent }}%</td>
            </tr>
            <tr>
                <th>Tax Amount</th>
                <td>{{ number_format(($invoice->total_amount / 100) * $invoice->tax_amount, 2)}}</td>
            </tr>
            <tr>
                <th>Grand Total</th>
                <td>{{ number_format((($invoice->total_amount / 100) * $invoice->tax_amount) + $invoice->total_amount, 2)}}</td>
            </tr>
        </table>
    </div>

    {{--  Seller Footer text --}}
    <p class="text-center mt-3">
        {{ config('invoices.footer_text') }}
    </p>
@endsection
