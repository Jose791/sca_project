<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
     protected $fillable=['asylee_id','descripcion','estado','hora_dieta'];
    
    
    

    // una dieta le pertenece a un asilado
    public function asylee ()
    {
    	return $this->belongsTo('App\Asylee');
    }

}
