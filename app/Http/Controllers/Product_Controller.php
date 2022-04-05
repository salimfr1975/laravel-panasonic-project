<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Product_Controller extends Controller
{
    //
    function index(Request $req)
    {
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
}
