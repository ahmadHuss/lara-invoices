@extends('app')
@section('section')
        <h1>Create your invoice</h1>
        <form action="{{ route('invoices.store') }}" method="POST">
            {{--  Portion 1   --}}
            <div class="row">
                <div class="col">
                    <label for="invoice_number">Invoice number *:</label>
                    <input type="text" name="invoice[invoice_number]" class="form-control @error('invoice.invoice_number') is-invalid @enderror"
                           placeholder="A0100" id="invoice_number" value="{{ old('invoice.invoice_number') }}">
                    @error('invoice.invoice_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="invoice_date">Invoice date *:</label>
                    <input type="text" name="invoice[invoice_date]" class="form-control @error('invoice.invoice_date') is-invalid @enderror"
                           placeholder="{{ date('Y-m-d') }}" value="{{ old('invoice.invoice_date') ? old('invoice.invoice_date') : date('Y-m-d')}}" id="invoice_date">
                    @error('invoice.invoice_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{--  Portion 2   --}}
            <div class="row mb-4">

                {{-- Customer Details --}}
                 <div class="col">
                     <h4 class="mt-3">Customer Details</h4>
                    {{-- Fields --}}
                     <div class="mb-4">
                         <label for="customer.name">Name *:</label>
                         <input type="text" name="customer[name]" class="form-control @error('customer.name') is-invalid @enderror" id="customer.name" value="{{ old('customer.name') }}">
                         @error('customer.name')
                         <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="mb-4">
                         <label for="customer.address">Address *:</label>
                         <input type="text" name="customer[address]" class="form-control @error('customer.address') is-invalid @enderror" id="customer.address" value="{{ old('customer.address') }}">
                         @error('customer.address')
                         <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="mb-4">
                         <label for="customer.country">Country *:</label>
                         <input type="text" name="customer[country]" class="form-control @error('customer.country') is-invalid @enderror" id="customer.country" value="{{ old('customer.country') }}">
                         @error('customer.country')
                         <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="mb-4">
                         <label for="customer.city">City *:</label>
                         <input type="text" name="customer[city]" class="form-control @error('customer.city') is-invalid @enderror" id="customer.city" value="{{ old('customer.city') }}">
                         @error('customer.city')
                         <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="mb-4">
                         <label for="customer.state">State:</label>
                         <input type="text" name="customer[state]" class="form-control @error('customer.state') is-invalid @enderror" id="customer.state" value="{{ old('customer.state') }}">
                         @error('customer.state')
                         <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="mb-4">
                         <label for="customer.postcode">Postcode/ZIP:</label>
                         <input type="text" name="customer[postcode]" class="form-control @error('customer.postcode') is-invalid @enderror" id="customer.postcode" value="{{ old('customer.postcode') }}">
                         @error('customer.postcode')
                         <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="mb-4">
                         <label for="customer.phone">Phone:</label>
                         <input type="text" name="customer[phone]" class="form-control @error('customer.phone') is-invalid @enderror" id="customer.phone" value="{{ old('customer.phone') }}">
                         @error('customer.phone')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="mb-4">
                         <label for="customer.email">Email:</label>
                         <input type="email" name="customer[email]" class="form-control @error('customer.email') is-invalid @enderror" id="customer.email" value="{{ old('customer.email') }}">
                         @error('customer.email')
                         <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>


                    {{-- Tables Additional Fields --}}
                     <p>Additional Fields <small>(optional):</small></p>
                     <div class="table-responsive">
                         <table class="table table-bordered">
                             <thead>
                             <tr>
                                 <th scope="col">Field</th>
                                 <th scope="col">Value</th>
                             </tr>
                             </thead>
                             <tbody>
                             @for($i = 0; $i <=2; $i++)
                             <tr>
                                 <td>
                                     <input type="text" name="customer_fields[{{ $i }}][field_key]" class="form-control">
                                 </td>
                                 <td>
                                     <input type="text" name="customer_fields[{{ $i }}][field_key]" class="form-control">
                                 </td>
                             </tr>
                             @endfor
                             </tbody>
                         </table>
                     </div>

                 </div>

                {{-- Seller Details --}}
                <div class="col">
                    <h4 class="mt-3">Seller Details</h4>
                    <p>Your company name</p>
                    <p>1 Street Name, Lahore, Pakistan</p>
                    <p>Email: xxxxx@company.com</p>
                    <p>VAT Number: xx xxxxxxx xxxx</p>

                </div>
            </div>


            {{--  Portion 3   --}}
            <div>
                {{-- Invoice --}}
                <div class="table-responsive">
                    <table class="table table-bordered" id="tab_logic">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr id="addr0">
                                <th scope="row">1</th>
                                <td>
                                    <input type="text" class="form-control" placeholder="Enter Product Name">
                                </td>
                                <td>
                                    <input type="text" class="form-control qty" placeholder="Enter Quantity">
                                </td>

                                <td>
                                    <input type="text" class="form-control price" placeholder="Enter Unit Price">
                                </td>

                                <td>
                                    <input type="text" class="form-control total" placeholder="0.00" disabled readonly>
                                </td>
                            </tr>
                            <tr id='addr1'></tr>
                        </tbody>
                    </table>
                </div>

                {{--  Buttons --}}
                <div class="d-flex justify-content-between align-content-center mb-5">
                    <button type="button" class="btn btn-success" id="add_row">Add Row</button>
                    <button type="button" class="btn btn-danger" id="delete_row">Delete Row</button>
                </div>

                {{--  Calculation Area --}}
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Sub Total</th>
                            <td>
                                <input type="text" class="form-control" placeholder="0.00" disabled readonly id="sub_total">
                            </td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <td>
                                <div class="input-group">
                                    <input type="text" name="invoice[tax_percent]" class="form-control @error('invoice.tax_percent') is-invalid @enderror" placeholder="0" value="{{ old('invoice.tax_percent') ? old('invoice.tax_percent') : '0' }}" id="tax">
                                    <span class="input-group-text">%</span>
                                </div>
                                @error('invoice.tax_percent')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Tax Amount</th>
                            <td><input type="text" class="form-control" id="tax_amount" placeholder="0.00" disabled readonly></td>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <td><input type="text" class="form-control" id="total_amount" placeholder="0.00" disabled readonly></td>
                        </tr>
                    </table>
                </div>

            </div>

            <button type="submit" class="btn btn-primary mt-4">Save Invoice</button>
            @csrf
        </form>
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        //  html() sets or returns the content (innerHTML) of the selected elements.
        let i = 1;
        // When user clicks the #add_row button
        $('#add_row').click(function () {
            let b = i - 1;
            // #addr1 is extra tr row we have added
            $('#addr' + i).html( $('#addr' + b).html())
                .find('th:first-child').html(i + 1);
            // Add another extra tr row deliberately
            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;
        });

        // When user clicks the #delete_row button
        $('#delete_row').click(function () {
            if (i > 1) {
                $('#addr' + (i - 1)).html('');
                i--;
            }
            calc();
        });

        $('#tab_logic tbody').on('keyup change', function () {
            calc();
        });
        $('#tax').on('keyup change', function () {
            calc_total();
        });
    });

    function calc() {
        $('#tab_logic tbody tr').each(function (i, element) {
            const html = $(this).html();
            if (html !== '') {
                const qty = $(this).find('.qty').val();
                const price = $(this).find('.price').val();
                $(this)
                    .find('.total')
                    .val(qty * price);

                calc_total();
            }
        });
    }

    function calc_total() {
        let total = 0;
        $('.total').each(function () {
            total += parseInt($(this).val());
        });

        $('#sub_total').val(total.toFixed(2));

        let tax_sum = (total / 100) * $('#tax').val();
        $('#tax_amount').val(tax_sum.toFixed(2));
        $('#total_amount').val((tax_sum + total).toFixed(2));
    }

</script>
@stop
