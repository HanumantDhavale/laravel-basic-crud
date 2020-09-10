<?php

namespace App\Http\Controllers;

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
        return view("index", [
            "product_list" => $products
        ]);
    }
    public function edit($id){
        $product = Product::find($id);
        return view("edit", [
            "product_details" => $product
        ]);
    }

    public function update($id, Request $request){
        $product = Product::find($id);
        $request->validate([
            "name" => "required",
            "price" => "required|numeric"
        ]);
        $product->update($request->all());
        return redirect()->back();
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
