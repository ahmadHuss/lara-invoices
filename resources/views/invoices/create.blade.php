@extends('app')
@section('section')
    <div class="app-box" style="max-width: 876px;">
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
            @if(count($customers) > 0)
            <div class="row mb-4">
                {{-- Customer Details --}}
                 <div class="col">
                     <h4 class="mt-3">Customer Details</h4>
                     <div class="mb-4">
                        <select class="form-select @error('invoice.customer_id') is-invalid @enderror" name="invoice[customer_id]">
                            <option disabled @if(old('invoice.customer_id') === null) selected @endif>Choose a customer</option>
                            @foreach($customers as $customer)
                               <option value="{{ $customer->id }}" @if($customer->id === (int) old('invoice.customer_id')) selected @endif>
                                   {{ $customer->name }}
                               </option>
                             @endforeach
                         </select>
                         @error('invoice.customer_id')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
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
            @endif

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
                            <th scope="col">Price ({{ config('invoices.currency') }})</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr id="addr0">
                                <th scope="row">1</th>
                                <td>
                                     {{--  We have enter the name value as an array (quantity[]) because users can create can multiple rows of same
                                        fields, So when we save inside the database we store the multiple rows.
                                      --}}
                                    <select name="product[]" class="form-select @error('product.0') is-invalid @enderror" data-select>
                                        <option disabled @if(old('product.0') === null) selected @endif>Pick Product</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" @if($product->id === (int) old('product.0')) selected @endif data-price="{{ $product->price }}">
                                                {{ $product->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="quantity[]" class="form-control qty @error('quantity.0') is-invalid @enderror" placeholder="Enter Quantity">
                                </td>

                                <td>
                                    <input type="text" name="price[]" class="form-control price @error('price.0') is-invalid @enderror" placeholder="Enter Unit Price" data-price-field disabled readonly>
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
                            <th>Sub Total ({{ config('invoices.currency') }})</th>
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
                            <th>Tax Amount ({{ config('invoices.currency') }})</th>
                            <td><input type="text" class="form-control" id="tax_amount" placeholder="0.00" disabled readonly></td>
                        </tr>
                        <tr>
                            <th>Grand Total ({{ config('invoices.currency') }})</th>
                            <td><input type="text" class="form-control" id="total_amount" placeholder="0.00" disabled readonly></td>
                        </tr>
                    </table>
                </div>

            </div>

            <button type="submit" class="btn btn-primary mt-4">Save Invoice</button>
            @csrf
        </form>
    </div>
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
            select_box();
        });

        // When user clicks the #delete_row button
        $('#delete_row').click(function () {
            if (i > 1) {
                $('#addr' + (i - 1)).html('');
                i--;
            }
            calc();
            select_box();
        });

        $('#tab_logic tbody').on('keyup change', function () {
            calc();
        });
        $('#tax').on('keyup change', function () {
            calc_total();
        });

        select_box();
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

    function select_box() {
        // Get all select boxes
        const $allSelects = $('[data-select]');
        if ($allSelects && $allSelects.length > 0) {
            $allSelects.each(function () {
                // Attach change event to select menu
                $(this).change(function ()  {
                    // Get select menu as a jQuery object
                    const $selectMenu = $(this);
                    const price = $selectMenu.find('option:selected').data('price');
                    const $priceInput = $selectMenu.closest('tr').find('td:eq(2) [data-price-field]');
                    if ($priceInput) {
                        $priceInput.val(price);
                    }
                }).change();  // Run on start
            });
        }
    }

</script>
@stop
