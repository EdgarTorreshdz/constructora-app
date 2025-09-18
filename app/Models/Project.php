<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'location',
        'budget',
        'start_date',
        'end_date',
        'status',
        'cover_image',
        'gallery_images',
        'featured',
        'sort_order',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'start_date' => 'date',
        'end_date' => 'date'
    ];
}
