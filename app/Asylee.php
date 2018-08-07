<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asylee extends Model
{
 	
   protected $fillable=['cedula','nombre','apellido','sexo','residencia','fecha_nac','condicion_especial','estado'];


    public function diseases(){
        return $this->belongsToMany(Disease::class,'asylee_disease')
            ->withPivot('asylee_id','disease_id')->withTimestamps();
            
    }

    public function medicines(){
        return $this->belongsToMany(Medicine::class,'asylee_medicine' ,'asylee_id','medicine_id')
            ->withPivot('hora_medicamento', 'complemento')
            ->withTimestamps();
            
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

    public function schedules ()
    {
      return $this->hasMany('App\Schedule')
        ->whereRaw('date_format(created_at, "%Y-%m-%d") = date_format(now(), "%Y-%m-%d")');
    }


   	public function getNombreAttribute ($nombre)
   	{
   		return ucwords($nombre);
   	}
}