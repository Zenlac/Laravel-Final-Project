<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CreateProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Find_Product', function (){
    return view('Find_Product');
});

Route::get('/Inventory', [InventoryController::class, 'show']);
Route::get('/Create', [CreateProductController::class, 'create']);

