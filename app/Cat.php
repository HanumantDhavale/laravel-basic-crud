<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = "categories";

    protected $fillable = ["title"];

    public function products(){
        return $this->belongsToMany(Product::class, "p_c_pivots", "category_id", "product_id");
    }

}
