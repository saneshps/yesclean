<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'default_image',
        'meta_title',
        'meta_description',
        'status',
        'created_at'
    ];
}
