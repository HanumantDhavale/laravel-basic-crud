<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "name",
        "price",
        "desc",
        "status"
    ];

    public function attributes(){
        return $this->hasMany(Attribute::class, "product_id");
    }

}
