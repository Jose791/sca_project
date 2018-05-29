<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearAsiladosRequest extends FormRequest
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

               'cedula'=>'required|max:11',
               'nombre'=>'required',
               'apellido'=>'required',
               'sexo'=>'required',
               'residencia'=>'required',
               'fecha_nac'=>'required',
               'condicion_especial'=>'required',
               'estado'=>'required',    
            
        ];

        
    }


    public function messages()

    {

      return[

               'cedula.required'=>'El campo Cedula es requerido',
               'nombre.required'=>'El campo Nombre es requerido',
               'apellido.required'=>'El campo Apellido es requerido',
               'sexo.required'=>'El campo Sexo es requerido',
               'residencia.required'=>'El campo Residencia es requerido',
               'fecha_nac.required'=>'El campo Fecha de Nacimiento es requerido',
               'condicion_especial.required'=>'El campo Condicion Especial es requerido',
               'estado.required'=>'El campo Estado es requerido'



      ];

    }


}



            
           