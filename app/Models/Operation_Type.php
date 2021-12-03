<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation_Type extends Model
{
    use HasFactory;

    protected $table = 'operation_types';
    protected $fillable = ['name'];
}
