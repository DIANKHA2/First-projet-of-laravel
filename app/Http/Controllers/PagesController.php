<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PagesController extends Controller
{
    public function home() {
        return view("pages.home");
    }

    public function apropos() {
        return view('pages.apropos');
    }

    public function services() {
       // $produits = DB::table("products")->paginate(1);
       $produits = Product::orderBy('product_name', 'desc')->paginate(2);
        return view('pages.services')->with('produits', $produits);
    }

    public function show($id) {
        // $produits = DB::table("products")->paginate(1);
        //$produits = Product::all();
         //return view('pages.services')->with('produits', $produits);
         $produit = DB::table('products')
                    ->where('id',$id)
                    ->first();
        return view('pages.show')->with('produit', $produit);

     }
}
