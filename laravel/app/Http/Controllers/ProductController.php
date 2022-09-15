<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function listeproduits () {
        return view("product-list");

    }

    function ficheproduit ($id) {
        return view("product-details", ['produit' => $id]);

    }

}

