<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 'title', 'image', 'image_alt', 'source', 'url', 'meta_title', 'meta_description', 'meta_keywords', 'created_at', 'updated_at'
    ];
}
