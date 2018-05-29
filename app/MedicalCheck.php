<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCheck extends Model
{
    protected $fillable=['asylee_id','diagnostico'];



// una chequeo medico le pertenece a un asilado
    public function asylee ()
    {
    	return $this->belongsTo('App\Asylee');
    }


}


