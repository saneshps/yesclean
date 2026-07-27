<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Sector extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'division',
        'description',
        'icon_url',
        'status'
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
