<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function listeproduits () {
        return 'Listedesproduits';

    }

    function ficheproduit ($id) {
        return 'Fiche du produit ' . $id;
    }

}

