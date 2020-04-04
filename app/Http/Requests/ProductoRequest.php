<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'producto' => 'required|max:25',
            'id_marca' => 'required',
            'id_modelo' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'caracteristica' => '',
            'categoria' => 'required',
            'id_proveedor' => 'required',
            'img' => 'required',
            
            
        ];
    }
   
}
