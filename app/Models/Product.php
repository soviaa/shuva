<?php

namespace App\Models;
use App\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable =[
        'id',
        'name',
        'category_id',
        'price',
        'stock',
        'image',
    ];
    
}
