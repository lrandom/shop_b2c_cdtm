<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'short_description',
        'meta_keyword',
        'meta_description',
        'category_id',
        'type',
        'user_id'
    ];
}
