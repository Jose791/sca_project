<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
     protected $fillable=['medicamento','condicion'];

     public function asylees(){
        return $this->belongsToMany(Asylee::class,'asylee_medicine','medicine_id','asylee_id')
            ->withPivot('hora_medicamento','complemento')->withTimestamps();
           
    }
}


