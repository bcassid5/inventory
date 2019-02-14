<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCollection extends Model
{
    protected $primaryKey = 'id';
	protected $keyType = 'string';
	public $incrementing = false;

	public function product(){
		return $this->hasMany(Product::class);
	}
}
