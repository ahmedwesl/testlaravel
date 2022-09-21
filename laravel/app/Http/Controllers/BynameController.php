<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class BynameController extends Controller
{
   function byname (){

       $produit= Products::orderBy('name')->get();
       return view('by-name', ['produit' => $produit]);


   }





}
