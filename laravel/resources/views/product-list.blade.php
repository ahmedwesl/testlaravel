@extends('layouts.test')
@section('ecommerce')
    Liste de produit
@endsection
@section('content')

    <h1> Liste des produits </h1>
    @foreach($produits as $produits)

        <img src="{{$produits->image}}" alt="">
        <h1> Nom du produit {{$produits->name}}</h1>
        <h1> Prix {{$produits->price}} € </h1>
        <h1> Quantité {{$produits->quantity}}  </h1>
        </div>
        </div>
    @endforeach

@endsection

