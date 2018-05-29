<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable=['asylee_id','visitor_id','fecha_reserva'];

    // con esto digo que: "una visita le pertence a un visitante"
    public function visitor ()
    {
    	return $this->belongsTo('App\Visitor');
    }

    // una visita le pertenece a un asilado
    public function asylee ()
    {
    	return $this->belongsTo('App\Asylee');
    }


}
