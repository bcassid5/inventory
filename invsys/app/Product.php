<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
	use Sortable;

	public $search = [
		'id', 'name', 'description', 'price', 
	];

    protected $fillable = [
		'name', 'description', 'price', 
	];

	public $sortable = [
		'id', 'collection_id', 'name', 'description', 'quantity', 'price',
	];

    protected $primaryKey = 'id';
	protected $keyType = 'string';
	public $incrementing = false;

	public function collection() {
		return $this->belongsTo(ProductCollection::class);
	}

}
