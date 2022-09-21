<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ByPriceController extends Controller
{
    function byprice (){

        $produit= Products::orderBy('price','desc')->get();
        return view('by-price', ['produit' => $produit]);

}}
