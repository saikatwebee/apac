<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'url', 'blade', 'meta_title', 'meta_description', 'meta_keywords', 'created_at', 'updated_at'
    ];
}
