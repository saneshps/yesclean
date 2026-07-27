<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'venue',
        'description',
        'default_image',
        'pagelink',
        'start_date',
        'end_date',
        'status'
    ];
}
