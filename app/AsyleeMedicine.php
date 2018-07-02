<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsyleeMedicine extends Model
{
 protected $table = 'asylee_medicine';
 protected $fillable=['asylee_id','hora_medicamento','complemento'];
	
    //

 // public function asylee ()
 //    {
 //    	return $this->belongsTo('App\Asylee');
 //    }

 //    public function medicine ()
 //    {
 //    	return $this->belongsTo('App\Medicine');
 //    }
}
