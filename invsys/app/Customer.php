<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    

    public function address(){
        return $this->hasOne(Address::class);
    }
}
