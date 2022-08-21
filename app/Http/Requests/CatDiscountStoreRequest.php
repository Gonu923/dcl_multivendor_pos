<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatDiscountStoreRequest extends FormRequest
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
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'vendor_id' => 'required|unique:cat_discounts,vendor_id',
            'category_id' => 'required',
            'dcl_discount' => 'required',
            'vendor_discount' => 'required',
        ];
    }
}
