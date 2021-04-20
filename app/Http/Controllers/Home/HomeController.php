<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $invoices = Invoice::with('customer')->get(); // returns the collection object
        return view('home', compact('invoices'));
    }
}
