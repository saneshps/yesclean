<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Testimonial;
use App\Models\Country;
use App\Models\Sector;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'country_id',
        'sector_id',
        'logo_url',
        'steel',
        'industrial',
        'status'
    ];

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
