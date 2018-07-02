<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
     protected $fillable=['medicamento','condicion'];

     public function asylees(){
        return $this->belongsToMany(Asylee::class,'asylee_medicine')
            ->withPivot('id','medicine_id','asylee_id','hora_medicamento', 'complemento')->withTimestamps();
           
    }
}


