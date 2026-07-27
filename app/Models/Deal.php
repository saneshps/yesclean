<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Deal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'brand_id',
        'description',
        'manager_id',
        'default_image',
        'catalogue',
        'status'
    ];

    public function brands()
    {
        return $this->belongsTo(Supplier::class, 'brand_id');
    }
}
