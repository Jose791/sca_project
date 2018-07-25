<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearEnfermedadesAsiladosRequest extends FormRequest
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
            

            'asylee_id' => 'required',
            'medicine_id' => 'required'
        ];
    }


    public function messages()

    {

      return[

               'asylee_id.required'=>'El campo Nombre de Anciano es requerido',
               'medicine_id.required'=>'El campo Seleccionar Enfermedad es requerido'
               
      ];

    }
}
