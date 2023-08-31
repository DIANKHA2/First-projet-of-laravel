@extends('layouts.master')

@section('title')
   show
@endsection

@section('contenu')
<div class="container">
    <h1>Détails du produit</h1>
        <div class="well">
            <hr>
            <h1>{{$produit->product_name}}</h1>
            <h2>${{$produit->product_price}}</h2>
            <p>{{$produit->product_description}}</p>
            <hr>
            <h2>{{$produit->created_at}}</h2>
            <hr>
            <a href="{{url('editproduct', [$produit->id])}}" class="btn btn-default">Eidt</a>

            <form action="{{url('deleteproduct', [$produit->id])}}" method="POST" class="pull-right">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>

        </div>
      
    
</div>
@endsection

        
        
 
