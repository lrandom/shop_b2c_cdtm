<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantValue extends Model
{
    use HasFactory;

    protected $fillable = ['variant_id', 'value'];

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }

    public function products()
    {
        return $this->
        belongsToMany(Product::class, 'product_variants',
            'variant_value_id', 'product_id');
    }
}
