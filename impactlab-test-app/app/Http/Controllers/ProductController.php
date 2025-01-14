<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * API to get all products
     * 
     * @url /api/products
     * @method GET
     */

    public function index()
    {
        return response()->json(Product::all());
    }
}
