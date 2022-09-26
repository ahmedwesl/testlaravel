<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Products::All();
        return view("backoffice", compact('produits'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create-office");


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product=new products();
        $product->image=$request
            ->input (key:'image');
        $product->name=$request
       ->input (key:'name');
       $product->price=$request
        ->input (key:'price');
        $product->quantity=$request
        ->input (key:'quantity');
        $product->save();

        return Redirect ('backoffice');
//        return view("backoffice");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Products::find($id);
        return view('edit-office',['products'=>$products]);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        $product= Products::find($id);
        $product->image=$request
            ->input (key:'image');
        $product->name=$request
            ->input (key:'name');
        $product->price=$request
            ->input (key:'price');
        $product->quantity=$request
            ->input (key:'quantity');
        $product->save();

        return Redirect ('backoffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Routing\Redirector|RedirectResponse
     */
    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        $products->delete();
        return redirect('/backoffice');
    }

}
