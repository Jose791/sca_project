<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearEnfermedadesRequest extends FormRequest
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
                 'enfermedad'=>'required',
                 // 'descripcion'=>'required'
        ];
    }


    public function messages()

    {

      return[

               'enfermedad.required'=>'El campo Nombre de Enfermedad es requerido',
               // 'descripcion.required'=>'El campo Descripcion de Enfermedad es requerido'
               



      ];

    }
}


