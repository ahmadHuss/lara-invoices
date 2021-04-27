<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvoiceRequest;
use App\Models\Customer;
use App\Models\CustomersField;
use App\Models\Invoice;
use App\Models\InvoicesItem;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoices.create');
    }


    public function store(StoreInvoiceRequest $request): string
    {
      // Get customer
      $customer = Customer::create($request->customer);

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


      // Get Invoice
      // It will combine into an array and saved inside the database.
      $invoice = Invoice::create($request->invoice + ['customer_id' => $customer->id]);

        // Save invoices_item inside invoices_items table
       for ($i = 0; $i < count($request->product); $i++) {
           // Array check whether a variable is set and is not NULL.
            if (isset($request->quantity[$i]) && isset($request->price[$i])) {
                InvoicesItem::create([
                    'invoice_id' => $invoice->id,
                    'name' => $request->product[$i],
                    'quantity' => $request->quantity[$i],
                    'price' => $request->price[$i]
                ]);
            }
       }
       return 'to be continued';
    }


    public function show($invoice_id)
    {
       $invoice = Invoice::findOrFail($invoice_id);
       return view('invoices.show', compact('invoice'));
    }



    public function download($invoice_id) {
        $invoice = Invoice::findOrFail($invoice_id);
        // loadView('invoices/pdf.blade.php') is the blade file we have to fill with the Email template HTML.
        $pdf = PDF::loadView('invoices.pdf', compact('invoice'));
        $filename = 'Invoice'.'-'.date('D-M-Y').'-'.time().'.pdf';
        return $pdf->download($filename);
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
        //
    }
}
