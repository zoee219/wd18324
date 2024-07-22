<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function listProduct(){
        $listProduct = Product::all();
        return view('admin.products.list-product')
        ->with([
            'listProduct' => $listProduct
        ]);
    }
    public function addProduct(){
        return view('admin.products.add-product');
    }
    public function addPostProduct(Request $req){
        $data=[
        'name' => $req->nameProduct,
        'price' => $req->priceProduct
        ];
        Product::create($data);
        return redirect()->route('admin.products.listProduct');
    }
}
