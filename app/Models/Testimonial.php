<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'position',
        'company',
        'content',
        'rating',
        'image',
        'approved',
        'featured',
        'sort_order',
        'project_type'
    ];
}
