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

    /*    public function brand()
        {
            return $this->belongsTo('App\Models\Brand');
        }*/

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function preview()
    {
        return $this->hasOne(Image::class)
            ->where('is_preview', 1);
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'product_variants',
            'product_id',
            'variant_id');
    }

    public function variantValues()
    {
        return $this->belongsToMany(VariantValue::class, 'product_variants',
            'product_id',
            'variant_value_id');
    }

}
