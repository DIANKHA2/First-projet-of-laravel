<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function create() {
        return view('pages.create');
    }

    public function saveproduct(Request $request) {
        //$product = new Product();
        //$product->product_name = $request->input('product_name');
        //$product->product_price = $request->input('product_price');
        //$product->product_description = $request->input('product_description');
        //$product->save();
        $this->validate($request, [
            'product_name'=>'required',
            'product_price'=>'required',
            'product_description'=>'required',
        ]);
        $data = array();
        $data['product_name'] = $request->input('product_name');
        $data['product_price'] = $request->input('product_price');
        $data['product_description'] = $request->input('product_description');
        DB::table('products')->insert($data);
        return redirect('/services')->with('status', 'Le produit'.$request->input('product_name').' a éré ajouté avec succes !!');
    }

    public function deleteproduct($id) {
       // $product = Product::find($id);
       // $product->delete();
       DB::table('products')->where("id", $id)->delete();

    return redirect('/services')->with('status', 'Votre produit a été suprimé avec succés !!');
    }

    public function editproduct($id) {
        // $product = Product::find($id);
        // $product->delete();
        DB::table('products')->where("id", $id)->delete();
 
     return view('pages.editproduct')->with("product", $product);
     }
}
