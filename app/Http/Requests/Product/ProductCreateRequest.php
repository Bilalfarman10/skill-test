<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'productName' => ['required', 'string'],
            'productPrice' => ['required', 'regex:/(\d+)?\.(\d+)?/'],
            'productImages' => ['required', 'string'],
            'productDescription' => ['required', 'string'],
            'haveUnits' => ['required', 'boolean'],
            'unit' => ['required_if:haveUnits,true', 'string'],
            'weightPerUnit' => ['required_if:haveUnits,true', 'regex:/(\d+)?\.(\d+)?/'],
        ];
    }
}
