<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'icon',
        'image',
        'featured',
        'sort_order',
        'gallery_images',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'gallery_images' => 'array'
    ];
}
