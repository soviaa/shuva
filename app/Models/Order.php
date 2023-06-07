<?php

namespace App\Models;
use App\Models\OrderItem;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'cart_id', 'total_amount', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    // Define any other relationships or methods as needed
}


