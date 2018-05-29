<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class CrearVisitasRequest extends FormRequest
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
                'visitor_id'=>'required',
                'fecha_reserva'=>'required'
        ];
    }

       public function messages()

    {

      return[

               'asylee_id.required'=>'El campo Nombre del Asilado es requerido',
               'visitor_id.required'=>'El campo Nombre del Visitante es requerido',
               'fecha_reserva.required'=>'El campo Fecha de la Visita es requerido'



      ];

    }
}


 