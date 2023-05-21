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
    public function outdoor()
    {
        return view('product.outdoor');
    }
    public function indoor()
    {
    return view('product.indoor');
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
        ->select('products.id','products.name AS product_name','products.category_id','categories.name AS category_name','products.price','products.stock','products.image',)
        ->join('categories','products.category_id','=','categories.id')
        ->get();
        $category=Category::all();
        return view('/product/outdoor',compact('data','category'));
        }
        public function print_indoor(){
            $data= DB::table('products')
            ->select('products.id','products.name AS product_name','products.category_id','categories.name AS category_name','products.price','products.stock','products.image',)
            ->join('categories','products.category_id','=','categories.id')
            ->get();
            $category=Category::all();
            return view('/product/indoor',compact('data','category'));
            }
}
