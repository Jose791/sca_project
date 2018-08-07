<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsyleeMedicine extends Model
{
 	protected $table = 'asylee_medicine';
 	protected $fillable=[];
	
 	public function asylee ()
    {
    	return $this->belongsTo('App\Asylee');
    }

    public function medicine ()
    {
    	return $this->belongsTo('App\Medicine');
    }

    public function schedules ()
    {
      	return $this->hasMany('App\Schedule')
        	->whereRaw('date_format(created_at, "%Y-%m-%d") = date_format(now(), "%Y-%m-%d")');
    }
}
