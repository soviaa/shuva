<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductsController extends Controller
{
    public function product()
    {
        return view('product.products');
    }
   public function carpets()
    {
    return view('product.carpets');
    }
  public function beddings()
    {
    return view('product.beddings');
    }
    public function print_outdoor(){
        $data= DB::table('products')
        ->select('products.id','products.name AS product_name','products.category_id','products.image','products.price','products.stock',)
        ->join('categories','products.category_id','=','categories.id')
        ->get();
        $category=Category::all();
        // return view('adminbook',['adminbooks'=>$data]);
        return view('/product/outdoor',compact('data','category'));
        // return view('adminbook',['adminbooks'=>$data]);
      
    
        }
        public function print_indoor(){
            $data= DB::table('products')
            ->select('products.id','products.name AS product_name','products.category_id','categories.name AS category_name','products.price','products.stock','products.image',)
            ->join('categories','products.category_id','=','categories.id')
            ->get();
            $data=Product::all();
            $category=Category::all();
            return view('/product/indoor',compact('data','category'));
            }
        public function print_carpets(){
            $data= DB::table('products')
            ->select('products.id','products.name AS product_name','products.category_id','categories.name AS category_name','products.price','products.stock','products.image','categories.id AS categories_id')
            ->join('categories','products.category_id','=','categories.id')
            ->get();
            $data=Product::all();
            $category=Category::all();
            return view('/product/carpets',compact('data','category'));
            }
        public function print_beddings(){
            $data= DB::table('products')
            ->select('products.id','products.name AS product_name','products.category_id','categories.name AS category_name','products.price','products.stock','products.image','categories.id AS categories_id')
            ->join('categories','products.category_id','=','categories.id')
            ->get();
            $data=Product::all();
            $category=Category::all();
            return view('/product/beddings',compact('data','category'));
        }
}
