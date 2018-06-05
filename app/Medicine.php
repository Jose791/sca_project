<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
     protected $fillable=['nombre','condicion'];

     public function asylees(){
        return $this->belongsToMany('\App\Asylee')->withTimestamps();
           
    }
}


