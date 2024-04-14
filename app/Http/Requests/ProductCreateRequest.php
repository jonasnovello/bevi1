<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * @var mixed
     */
    public $id;

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
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
            'stock_quantity' => 'nullable|required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo name é obrigatório',
            'price.numeric' => 'Informe apenas números no campo price',
            'stock_quantity.numeric' => 'Informe apenas números no campo stock_quantity',
        ];
    }

}
