<?php

namespace App\Http\Controllers;

use App\Models\CreateProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CreateProductController extends Controller
{
    public function create()
    {
        return view('CreateProduct.create');
    }

    public function store(Request $request)
    {
        $createproduct = new CreateProduct;
        $createproduct->id = $request->input('id');
        $createproduct->product = $request->input('product');
        $createproduct->quantity = $request->input('quantity');
        $createproduct->price = $request->input('price');
        $createproduct->save(); 
        // Sir AAAAAAAA masakit na sa ulooo
        return redirect()->back()->with('status','New Product has been Created');
    }
}
