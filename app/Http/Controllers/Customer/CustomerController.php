<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\StoreCustomerRequest;
use App\Models\Country;
use App\Models\Customer;
use App\Models\CustomersField;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    /**
     * 👌
     */
    public function index()
    {
        // Show all customers
        $customers = Customer::orderBy('id')->get();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     * 👌
     */
    public function create()
    {
      $countries = Country::all();
      return view('customers.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     * 👌
     * @param StoreCustomerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->all());

        // Additional fields optional stored inside the database
        for ($i = 0; $i < count($request->customer_fields); $i++) {
            // Array check whether a variable is set and is not NULL.
            if (isset($request->customer_fields[$i]['field_key']) && isset($request->customer_fields[$i]['field_value'])) {
                CustomersField::create([
                    'customer_id' => $customer->id,
                    'field_key' => $request->customer_fields[$i]['field_key'],
                    'field_value' => $request->customer_fields[$i]['field_value']
                ]);
            }
        }

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
