<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
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
public function print(){
    $data= DB::table('products')
    ->select('products.id','products.name AS product_name','categories.name AS category_name','products.price','products.stock',)
    ->join('categories','products.category_id','=','categories.id')
    ->get();
    $category=Category::all();
    // return view('adminbook',['adminbooks'=>$data]);
    return view('/admin/product',compact('data','category'));
    // return view('adminbook',['adminbooks'=>$data]);
  
    }
    public function delete($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('/admin/product');
    }
    public function userprint(){
        $data= DB::table('users')
        ->select('users.id','users.firstname AS f_name','users.lastname AS l_name','users.email','users.phone',)
        ->get();
        return view('/admin/adminusers',compact('data'));
        
        }
        public function user(){
            return view('admin.adminusers');
        }
}