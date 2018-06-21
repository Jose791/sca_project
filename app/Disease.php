<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable=['enfermedad'];


      public function asylees(){
        return $this->belongsToMany(Asylee::class,'asylee_disease')
            ->withPivot('disease_idasylee_id','asylee_id')->withTimestamps();
           
    }
}
