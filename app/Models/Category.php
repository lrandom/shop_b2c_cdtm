<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
