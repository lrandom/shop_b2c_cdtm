<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'price',
        'brand_id',
        'discount_amount',
        'discount_type',
        'meta_keyword',
        'meta_content',
        'meta_description',
        'short_description',
        'category_id'
    ];
}
