<?php

use Illuminate\Support\Facades\Route;

Route::get("/product/add", "ProductController@add")
    ->name("product.add");

Route::post("/product/store", "ProductController@save")
    ->name("product.save");

Route::get("/", "ProductController@index")
    ->name("product.list");

Route::get("/product/edit/{id}", "ProductController@edit")
    ->name("product.edit");

Route::post("/product/update/{id}", "ProductController@update")
    ->name("product.update");

Route::get("/product/delete/{id}", "ProductController@delete")
    ->name("product.delete");
