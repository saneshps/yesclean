<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accessories;


class ProductAccessories extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'accessories_id',
        'accessories_type',
        'priority',
    ];
    public function accessories()
    {
        return $this->hasMany(Accessories::class, 'id', 'accessories_id');
    }
}
