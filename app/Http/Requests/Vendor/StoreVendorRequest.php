<?php

namespace App\Http\Requests\Vendor;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendorRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            "name" => "required|string|max:255,unique:vendors,name"
        ];
    }
}
