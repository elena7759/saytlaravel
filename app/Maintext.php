<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintext extends Model
{
 protected $table='maintexts';
 public function scopePopular($query){
	 return $query->where('status','show')->get();
 }
}
