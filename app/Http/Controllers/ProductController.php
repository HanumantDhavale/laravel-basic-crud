<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{
    public function add(){
        return view("add");
    }
    public function save(Request $request){
        $request->validate([
            "name" => "required",
            "price" => "required|numeric"
        ]);
        Product::create($request->all());
        return redirect()->route("product.list");
    }
    public function index(){
        $products = Product::paginate(10);
        $cats = Cat::paginate(10);
        return view("index", [
            "product_list" => $products,
            "cats" => $cats
        ]);
    }
    public function edit($id){
        $product = Product::find($id);
        return view("edit", [
            "product_details" => $product,
            "cats" => $product->categories()->pluck("id")->toArray()
        ]);
    }

    public function update($id, Request $request){
        $product = Product::find($id);
        $request->validate([
            "name" => "required",
            "price" => "required|numeric"
        ]);
        $product->categories()->detach();
        $product->update($request->all());
        $product->categories()->attach($request->categories);
        return redirect()->back();
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function add_attribute(Product $product, Request $request){
        $request->validate([
            "title" => "required",
            "value" => "required"
        ]);

        $product->attributes()->create($request->all());
        return redirect()->back();
    }

}
