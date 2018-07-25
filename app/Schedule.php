<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	protected $filllable = [
		'asylee_id', 'user_id', 'medicine_id'
	];
    
    public function asylee ()
    {
    	return $this->belongsTo('App\Asylee');
    }
}
