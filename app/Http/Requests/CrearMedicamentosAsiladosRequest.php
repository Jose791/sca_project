<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearMedicamentosAsiladosRequest extends FormRequest
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
                 'medicine_id'=>'required',
                 'hora_medicamento'=>'required',
                 'complemento'=>'required'
        ];
    }


    public function messages()

    {

      return[

               'asylee_id.required'=>'El campo Nombre del Asilado es requerido',
               'medicine_id.required'=>'El campo Nombre del Medicamento es requerido',
               'hora_medicamento.required'=>'El campo Hora es requerido',
               'complemento.required'=>'El campo Complemento es requerido'



      ];

    }
}


