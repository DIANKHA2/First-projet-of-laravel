@extends('layouts.master')

@section('title')
   services
@endsection

@section('contenu')
<div class="container">
    <h1>Welcome to the services page</h1>
    @if (Session::has('status'))
        <div class="alert alert-success">
            {{Session::get('status')}}
    @endif
        </div>
        @foreach ($produits as $produit)
        <div class="well">
            <h1><a href="/show/{{$produit->id}}">{{$produit->product_name}}</a></h1>
        </div>
        @endforeach
        {{$produits->links()}}
</div>
@endsection

        
        
 
