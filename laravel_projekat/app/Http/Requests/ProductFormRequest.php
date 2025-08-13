<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name'          => ['required', 'string'],
            'price'          => ['required', 'numeric'],
            'description'          => ['required'],
            'category'          => ['required'],
            'image'          => ['nullable', 'mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100, min_height=100,max_width=1000, max_height=1000'],
            'quantity'          => ['required', 'integer']
            
        ];
    }
}
