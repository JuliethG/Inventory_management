<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $fillable = [
        'total_sale',
        'payment',
        'discount',
        'person_id',
        'user_id',
        'box_id',
        'operation_type_id'
    ];
}
