<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *   +request: Symfony\Component\HttpFoundation\ParameterBag {#1235 ▼
    #parameters: array:7 [▼
    "invoice" => array:3 [▼
        "invoice_number" => "432432"
        "invoice_date" => "2021-04-19"
        "tax_percent" => "0"
    ]
    "customer" => array:8 [▼
        "name" => "Teresa T Loera T Loera"
        "address" => "3392  Mount Olive Road"
        "country" => "United Kingdom"
        "city" => "Norcross"
        "state" => "GA"
        "postcode" => "30093"
        "phone" => "+446788838563"
        "email" => "aizvipvt@gmail.com"
    ]
    "customer_fields" => array:3 [▼
        0 => array:1 [▶]
        1 => array:1 [▶]
        2 => array:1 [▶]
    ]
    "product" => array:1 [▼
        0 => "a"
    ]
    "quantity" => array:1 [▼
        0 => "2"
    ]
    "price" => array:1 [▼
        0 => "100"
    ]
    "_token" => "qECq7cD42fGKJgsj0v0CG9z2cG7hvp67ddqM5n66"
    ]
    }
     * @return array
     */
    public function rules()
    {
        return [
            // invoice
            'invoice.invoice_number' => 'required',
            'invoice.invoice_date' => 'required|date',
            'invoice.customer_id' => 'required',
            'invoice.tax_percent' => 'numeric', // I didn't enter the `required` flag because database
            // will add the default value to 0

            // invoices_items
            'product.0' => 'required',
            'quantity.0' => 'required',
            'price.0' => 'required',
        ];
    }
}
