<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CreateProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/Inventory');
});

Route::get('/CreateProduct', function (){
    return view('CreateProduct');
});

Route::get('/ReadProduct', function (){
    return view('ReadProduct');
});

Route::get('/UpdateProduct', function (){
    return view('UpdateProduct');
});

Route::get('/DeleteProduct', function (){
    return view('DeleteProduct');
});

Route::get('/Inventory', [InventoryController::class, 'show']);
Route::get('/add-add_product', [CreateProductController::class, 'create']);
Route::post('add-add_product', [CreateProductController::class, 'store']);
