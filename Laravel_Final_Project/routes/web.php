<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CreateProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Create_Product', function (){
    return view('Create_Product');
});

Route::get('/Read_Product', function (){
    return view('Read_Product');
});

Route::get('/Update_Product', function (){
    return view('Update_Product');
});

Route::get('/Delete_Product', function (){
    return view('Delete_Product');
});

Route::get('/Inventory', [InventoryController::class, 'show']);
Route::get('/add-add_product', [CreateProductController::class, 'create']);
Route::post('add-add_product', [CreateProductController::class, 'store']);
