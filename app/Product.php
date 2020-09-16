<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = "products";

    protected $fillable = [
        "name",
        "price",
        "desc",
        "status"
    ];

    public function attributes(){
        return $this->hasMany(Attribute::class, "product_id");
    }

    public function categories(){
        return $this->belongsToMany(Cat::class, "p_c_pivots", "product_id", "category_id");
    }

}
