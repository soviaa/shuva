<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders(){
        return view('admin.orders');
    }
    public function showAllOrders(){
        $orders= DB::table('orders')
        ->select('orders.id','users.firstname AS user_fname','users.lastname AS user_lname','users.phone','orders.total_amount','orders.status',)
        ->join('users','orders.user_id','=','users.id')
        ->get();
        $user=User::all();
        return view('admin/orders',compact('orders','user'));
      
        }
        public function ordersitems(){
            return view('admin.ordersitems');
        }
        public function showAllItems(){
            $orders= DB::table('order_items')
            ->select('order_items.id','orders.id AS order_id','products.name AS product_name','order_items.quantity','order_items.price','order_items.total')
            ->join('orders','order_items.order_id','=','orders.id')
            ->join('products','order_items.product_id','=','products.id')
            ->get();
            $product=Product::all();
            return view('admin/orderitems',compact('orders','product'));
          
            }
    }
