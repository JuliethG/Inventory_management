<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'minimum_inventory',
        'purchase_price',
        'sale_price',
        'presentation',
        'unit',
        'total_quantity',
        'status',
        'category_id',
        'user_id'
    ];
}
