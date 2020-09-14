<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add(){
        return view("customer-add");
    }
    public function save(Request $request){
        $request->validate([
        "name" => "required|unique:customers,name",
            "city" => "nullable|min:3",
            "age" => "required|numeric"
        ], [
            "name.unique" => "Name already used"
        ]);
        Customer::create($request->all());
        return redirect()->back();
    }
}
