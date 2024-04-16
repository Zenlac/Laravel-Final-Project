<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    function show(){
        $data=Inventory::all();
        return view('InventoryView', ['InventoryView'=>$data]);
    }
}