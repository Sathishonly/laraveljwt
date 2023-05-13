<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function product(Request $request)
    {
        $product = product::all();
        return response()->json(['status_code' => 200, 'data' => $product]);

    }
}