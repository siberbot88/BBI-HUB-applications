<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /** @use HasFactory<\Database\Factories\FeedbackFactory> */
    use HasFactory;

    protected $fillable = [
        'service_id',
        'user_id',
        'rating',
        'comments',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function services()
    {
        return $this->belongsTo(Service::class);
    }
}
