<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        "product_id",
        "title",
        "value"
    ];

    public function product(){
        return $this->belongsTo(Product::class, "product_id");
    }

}
