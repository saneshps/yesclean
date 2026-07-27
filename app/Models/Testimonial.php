<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'designation',
        'image_url',
        'comment',
        'video_url',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
