<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	public $table='book';
	public $timestamps = false;


	PUBLIC function category(){
		return $this->belongsTo('App\Category');
	}
}
