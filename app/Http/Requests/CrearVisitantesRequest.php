<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearVisitantesRequest extends FormRequest
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
                 'nombre'=>'required',
                 'apellido'=>'required',
                 'cedula'=>'required',
                 'direccion'=>'required',
                 'sexo'=>'required',
        ];
    }

       public function messages()

    {

      return[

               'nombre.required'=>'El campo Nombre es requerido',
               'apellido.required'=>'El campo Apellidos es requerido',
               'cedula.required'=>'El campo Cedula es requerido',
               'direccion.required'=>'El campo Direccion es requerido',
               'sexo.required'=>'El campo Sexo es requerido'



      ];

    }
}


