<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class NamePriceController extends Controller
{
    function bynameprice ($id)
    {
        $produit =Products::find($id);
        return view('name-price', ['produit' => $produit]);

    }}
