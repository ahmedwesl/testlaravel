<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller

{
    function listeproduits()
    {
        $produits = Products::All();
        return view("product-list", compact('produits'));

    }

    function ficheproduit($id)
    {
        $produit = Products::findOrFail($id);
        return view('product-details', ['produit' => $produit]);

        if ($produit === null) {
            abort(404);
        }
    }


}

