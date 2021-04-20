<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['invoice_number', 'invoice_date', 'customer_id', 'tax_percent'];

    // belongsTo represents 1 to M => 1Customer can create many invoices
    public function customer() {
        // Customer::class must return a relationship instance
        return $this->belongsTo(Customer::class);
    }

    // Mutator
    public function getTotalAmountAttribute() {
        return 1;
    }
}
