<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearChequeosMedicosRequest extends FormRequest
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
            
            'asylee_id'=>'required',
            'diagnostico'=>'required'
        ];
    }

     public function messages()

    {

      return[

               'asylee_id.required'=>'El campo Nombre del Asilado es requerido',
               'diagnostico.required'=>'El campo Diagnostico es requerido'
               



      ];

    }
}


 