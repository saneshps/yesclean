<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductAccessories;

class Accessories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'item_number',
        'image',
        'image_alt',
    ];

}
