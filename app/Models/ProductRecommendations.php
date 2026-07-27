<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductRecommendations extends Model
{
    use HasFactory;
    protected $table = "recommended_products";
    protected $fillable = [
        'product_id',
        'rec_product_id',

    ];
    
    public function recommened_products()
    {
        return $this->hasMany(Product::class, 'id', 'rec_product_id');
    }    
}
