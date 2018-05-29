<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
   	protected $fillable=['nombre','apellido','cedula','direccion','sexo'];

   	// con esto digo que: "un visitante tiene muchas visitas"
   	public function visits ()
   	{
   		return $this->hasMany('App\Visit');
   	}

   	// esto se llama en Laravel: Asessor - lo que hace es que cuando ud. llame este atributo desde alguna vista, se lo mandar'a formateado segun ud. le indique al atributo. (en este caso se mandar'a el nombre con la primera letra en mayuscula)
   	public function getNombreAttribute ($nombre)
   	{
   		return ucwords($nombre);
   	}
}