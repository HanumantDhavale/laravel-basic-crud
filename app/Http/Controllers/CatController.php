<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function add(){
        return view("cat-add");
    }
    public function save(Request $request){
        $request->validate([
            "title" => "required"
        ]);

        Cat::create($request->all());

        return redirect()->route('product.list');

    }
    public function edit(Cat $cat){
        $products = $cat->products()->pluck("id")->toArray();
        return view("cat-edit", compact('cat', 'products'));
    }
    public function update(Cat $cat, Request $request){
        $request->validate([
            "title" => "required"
        ]);

        $cat->update($request->all());
        $cat->products()->attach($request->products);
        return redirect()->back();

    }

    public function delete(Cat $cat){
        $cat->delete();
        return redirect()->back();
    }
}
