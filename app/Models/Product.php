<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'quantity',
        'pricePerItem',
    ];

    protected $casts = [
        'productName' => 'string',
        'quantity' => 'integer',
        'pricePerItem' => 'double',
    ];
}
