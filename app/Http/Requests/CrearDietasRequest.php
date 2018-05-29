<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearDietasRequest extends FormRequest
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
                  'descripcion' => 'required',
                  'estado' => 'required',
                  'hora_dieta' => 'required'

        ];
    }


     public function messages()

    {

      return[

               'asylee_id.required'=>'El campo Nombre del Asilado es requerido',
               'descripcion.required'=>'El campo Descripcion es requerido',
               'estado.required'=>'El campo Estado es requerido',
               'hora_dieta.required'=>'El campo Hora es requerido'



      ];

    }
}

 