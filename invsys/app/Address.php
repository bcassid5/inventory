<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
		'street',
            'city',
            'province_state',
            'country',
            'postal_zip',
            'phone_main',
            'phone_fax',
	];

    protected $primaryKey = 'id';
	protected $keyType = 'string';
	public $incrementing = false;

	public function customer() {
		return $this->belongsTo(Customer::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function supplier() {
		//return $this->belongsTo(Supplier::class);
	}
}
