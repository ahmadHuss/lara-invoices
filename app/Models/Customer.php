<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'country', 'city', 'state', 'postcode', 'phone','email'];


    public function customers_fields() {
        return $this->hasMany(CustomersField::class);
    }
}
