<?php

namespace App\Http\Controllers;

use App\AdharDetail;
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
            "age" => "required|numeric",
            "adhar_number" => "required|numeric|digits:12",
            "birth_year" => "nullable|numeric",
        ], [
            "name.unique" => "Name already used"
        ]);
        $custmer = Customer::create($request->all());
        $custmer->adhar()->create([
           "adhar_number" => $request->adhar_number,
           "bith_year" => $request->birth_year
        ]);

        return redirect()->back();
    }

    public function index(){
        $adhar = AdharDetail::where("adhar_number", "123456789123")->first();
    }
}
