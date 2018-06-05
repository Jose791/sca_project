<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asylee extends Model
{
 	
   protected $fillable=['cedula','nombre','apellido','sexo','residencia','fecha_nac','condicion_especial','estado'];


    public function diseases(){
        return $this->belongsToMany('\App\Disease')->withTimestamps();
            
    }

    public function medicines(){
        return $this->belongsToMany('\App\Medicine')->withTimestamps();
            
    }

  


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
    
      // un asilado tiene muchos chequeos medicos
 	public function medicalchecks ()
   	{
   		return $this->hasMany('App\MedicalCheck');
   	}


   	public function getNombreAttribute ($nombre)
   	{
   		return ucwords($nombre);
   	}
}