<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearMedicamentosRequest extends FormRequest
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
                 'medicamento'=>'required',
                 'condicion'=>'required'
        ];
    }

    public function messages()

    {

      return[

               
               'medicamento.required'=>'El campo Nombre del Medicamento es requerido',
               'condicion.required'=>'El campo Condicion es requerido'


      ];

    }
}


