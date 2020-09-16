<?php

use \App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get("/products", "ProductController@index")
    ->name("product.list")
    ->middleware("CustomAuth");

Route::group(["middleware" => "CustomAuth"], function (){

    Route::get("/product/add", "ProductController@add")
        ->name("product.add");

    Route::post("/product/store", "ProductController@save")
        ->name("product.save");

    Route::get("/product/edit/{id}", "ProductController@edit")
        ->name("product.edit");

    Route::post("/product/update/{id}", "ProductController@update")
        ->name("product.update");

    Route::post("/product/add/attribute/{product}", "ProductController@add_attribute")
        ->name("product.add.attribute");

    Route::get("/product/delete/{id}", "ProductController@delete")
        ->name("product.delete");

    Route::get("/cat/add", "CatController@add")
        ->name("cat.add");

    Route::post("/cat/save", "CatController@save")
        ->name("cat.save");

    Route::get("/cat/edit/{cat}", "CatController@edit")
        ->name("cat.edit");

    Route::post("/cat/update/{cat}", "CatController@update")
        ->name("cat.update");

    Route::get("/cat/delete/{cat}", "CatController@delete")
        ->name("cat.delete");


});

/*
 * Laravel ^8.0
 */
/*Route::get("/", [ProductController::class, 'index']);*/

Route::get("/customers", "CustomerController@index");

Route::get("/customer/add", "CustomerController@add");

Route::post("/customer/save", "CustomerController@save")
    ->name("customer.save");

Route::get("/register", "AuthController@register");
Route::post("/register/store", "AuthController@store")
    ->name("register");

Route::get("/login", "AuthController@login");
Route::post("/login/auth", "AuthController@auth")
    ->name("login");

Route::get("/logout", "AuthController@logout")
    ->name("logout");



/*********************Home/base route*******************/

Route::get("/", "HomeController@home");
