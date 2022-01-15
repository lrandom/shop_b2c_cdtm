<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function variantValues()
    {
        return $this->hasMany(VariantValue::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_variants', 'variant_id', 'product_id');
    }
}
