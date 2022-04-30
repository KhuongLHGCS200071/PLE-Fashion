<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    
    function createProduct(Request $req){

        $prod = new Product;

        $prod->name = $req->input('name');
        $prod->description = $req->input('description');
        $prod->price = $req->input('price');
        $prod->category_id = $req->input('category');
        $prod->img_1 = $req->input('img_1');
        $prod->img_2 = $req->input('img_2');
        $prod->img_3 = $req->input('img_3');
        $prod->save();
        return redirect('admin');
    }

    function updateProduct(Request $req, $id){

        $prod = Product::find($id);

        $prod->name = $req->input('name');
        $prod->description = $req->input('description');
        $prod->price = $req->input('price');
        $prod->category_id = $req->input('category');
        $prod->img_1 = $req->input('img_1');
        $prod->img_2 = $req->input('img_2');
        $prod->img_3 = $req->input('img_3');
        $prod->update();

        return redirect('admin');
    }

    function deleteProduct( $id){
        Product::destroy($id);
        return redirect('admin');
    }
}
