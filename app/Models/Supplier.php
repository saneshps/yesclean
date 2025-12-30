<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Deal;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'short_code',
        'logo_url',
        'banner_url',
        'banner_mobile_url',
        'website',
        'description',
        'meta_title',
        'meta_description',
        'keywords',
        'country_id',
        'division',
        'status'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function deal()
    {
        return $this->hasMany(Deal::class);
    }
}
