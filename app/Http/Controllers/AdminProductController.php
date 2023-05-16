<?php

namespace App\Http\Controllers;
use App\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    //
   
public function admindash(){
    return view('admin.admindash');
}
public function addproducts(){
    return view('admin.addproducts');
}
public function product(){
    return view('admin.product');
}
public function addproducts_post(Request $request){

    $product =new Product();

   $product->name=$request->product_name;
   $product->category_id=$request->category_id;
    $product->price=$request->price;
    $product->stock=$request->stock;
    $product->image=$request->image;
    $product->save();
    return redirect('/admin/product');
}
}