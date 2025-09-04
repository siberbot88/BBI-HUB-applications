<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    /** @use HasFactory<\Database\Factories\WorkshopFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'workshop_spec',
        'location',
        'image',
        'rating_avg',
        'rating_count',
        'operational_hour',
        'is_open',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
