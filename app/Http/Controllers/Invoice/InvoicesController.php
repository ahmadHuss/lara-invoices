<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvoiceRequest;
use App\Models\Customer;
use App\Models\CustomersField;
use App\Models\Invoice;
use App\Models\InvoicesItem;
use App\Models\Product;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function index()
    {
        return redirect()->route('home');
    }

    /**
     * 👌
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::orderBy('id')->get();
        $products = Product::orderBy('id')->get();
        return view('invoices.create', compact('customers','products'));
    }


    /**
     * 👌
     * Process the form
     *
     */
    public function store(StoreInvoiceRequest $request): string
    {

      // Get Invoice
      // It will combine into an array and saved inside the database.
      $invoice = Invoice::create($request->invoice);

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
       return redirect()->route('home');
    }


    /**
     * 👌
     * Show the details
     *
     */
    public function show($invoice_id)
    {
       $invoice = Invoice::findOrFail($invoice_id);
       return view('invoices.show', compact('invoice'));
    }



    /**
     * 👌
     * Download the invoice
     *
     */
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        return redirect()->route('home');
    }
}
