<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\CreateProductController;
use Illuminate\Database\Eloquent\Model;

class CreateProduct extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'inventories';
    protected $fillable = [
        'id',
        'product',
        'quantity',
        'price',
    ];
}
