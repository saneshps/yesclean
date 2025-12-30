<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subtitle',
        'slug',
        'category_id',
        'brand_id',
        'description',
        'manager_id',
        'default_image',
        'is_demo',
        'is_featured',
        'top_rated',
        'menu_order',
        'status'
    ];
    public function toSearchableArray()
    {
        return [
            'name'      => $this->name,
            'subtitle'  => $this->subtitle,
            'description' => $this->description
        ];
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
	
	public function team()
    {
        return $this->hasOne(Team::class,'id','manager_id');
    }
	
	
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'brand_id');
    }
	


	
	public function getNameExcerptAttribute()
    {
        return Str::words($this->name, '24');
    }
}
