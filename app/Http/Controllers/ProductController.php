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
        $prod->img = $req->input('img_path');
        $prod->save();

        return redirect()->back()->with('success','Create product successfully.');
    }

    function editProduct(Request $req){

        $prod = new Product;

        $prod->name = $req->input('name');
        $prod->description = $req->input('description');
        $prod->price = $req->input('price');
        $prod->category_id = $req->input('category');
        $prod->img = $req->input('img_path');
        $prod->save();

        return redirect()->back()->with('success','Create product successfully.');
    }

    function deleteProduct(Request $req){
        $prod->delete();
        $prod->save();
    }
}
