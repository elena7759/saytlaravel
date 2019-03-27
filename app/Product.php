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
}
