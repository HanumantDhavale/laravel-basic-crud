<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdharDetail extends Model
{
    protected $fillable = [
        "customer_id",
        "adhar_number",
        "bith_year"
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, "customer_id");
    }

}
