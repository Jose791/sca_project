<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable=['nombre'];


      public function asylees(){
        return $this->belongsToMany('\App\Asylee')->withTimestamps();
           
    }
}
