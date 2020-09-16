<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        "name",
        "city",
        "age"
    ];

    public function adhar(){
        return $this->hasOne(AdharDetail::class, "customer_id");
    }

}
