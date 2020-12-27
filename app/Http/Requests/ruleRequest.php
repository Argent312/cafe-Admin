<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ruleRequest extends FormRequest
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
            'nombre'=>'required|max:50',
            'descripcion'=>'required|max:255',
            'precio'=>'required',
            'categoria'=>'required',
            //'imagen'=>'required|unique:Product',
            'estado'=>'required'
        ];
    }
    
    public function messages()
    {
        return[
            'nombre.required'=>'El nombre es obligatorio',
            'descripcion.required'=>'Necesita una descripcion breve',
            'precio.required'=>'Precio requerido',
            'categoria.required'=>'Categoria requerida',
            //'imagen.required'=>'Imagen obligatoria',
            'estado.required'=>'Estado obligatorio'
        ];
    }
}
