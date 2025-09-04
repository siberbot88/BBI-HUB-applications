<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_log extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'step',
        'description',
        'image',
    ];

    public function services()
    {
        return $this->belongsTo(Service::class);
    }
}
