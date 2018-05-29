<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asylee extends Model
{
 	protected $fillable=['cedula','nombre','apellido','sexo','residencia','fecha_nac','condicion_especial','estado'];

 	// un asilado tiene muchas visitas
 	public function visits ()
   	{
   		return $this->hasMany('App\Visit');
   	}
    
    // un asilado tiene muchas dietas
 	public function diets ()
   	{
   		return $this->hasMany('App\Diet');
   	}
    
      // un asilado tiene muchas chequeos medicos
 	public function checks ()
   	{
   		return $this->hasMany('App\MedicalCheck');
   	}


   	public function getNombreAttribute ($nombre)
   	{
   		return ucwords($nombre);
   	}
}