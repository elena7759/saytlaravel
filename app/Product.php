<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
	'name',
	'body',
	'price',
	'picture',
	'status',
	'vip',
	'user_id'
	];


public function catalogs(){
    return $this->belongsTo('\App\Catalog', 'catalog_id');
    }
}

