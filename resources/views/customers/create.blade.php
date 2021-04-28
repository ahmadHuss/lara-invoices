@extends('app')
@section('section')
    <div class="app-box" style="max-width: 876px;">
        <h1>Create your customer</h1>
        <form action="{{ route('customers.store') }}" method="POST">
            {{--  Portion 1   --}}
            <div class="row mb-4">

                {{-- Customer Details --}}
                <div class="col">
                    <h4 class="mt-3">Customer Details</h4>
                    {{-- Fields --}}
                    <div class="mb-4">
                        <label for="name">Name *:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="address">Address *:</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}">
                        @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="country">Country *:</label>
                        <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" id="country" value="{{ old('country') }}">
                        @error('country')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="city">City *:</label>
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="city" value="{{ old('city') }}">
                        @error('city')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="state">State:</label>
                        <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" id="state" value="{{ old('state') }}">
                        @error('state')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="postcode">Postcode/ZIP:</label>
                        <input type="text" name="postcode" class="form-control @error('postcode') is-invalid @enderror" id="postcode" value="{{ old('postcode') }}">
                        @error('postcode')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone') }}">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                   {{--   ---------------------------------------   --}}


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
                                        <input type="text" name="customer_fields[{{ $i }}][field_value]" class="form-control">
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

            <button type="submit" class="btn btn-primary mt-4">Save Customer</button>
            @csrf
        </form>
    </div>
@endsection
