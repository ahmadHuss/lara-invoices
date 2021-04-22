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


    // invoices_items will be hasMany 1 to M relation => 1invoice can have many items
    public function invoices_items() {
        return $this->hasMany(InvoicesItem::class);
    }

    // Mutator Attributes:
    public function getTotalAmountAttribute() {
        $totalAmount = 0;
        // We have to create the 1:M relation with the Invoice Model
        foreach ($this->invoices_items as $item) {
            $totalAmount +=  $item->price * $item->quantity;
        }
        return $totalAmount;
    }
}
