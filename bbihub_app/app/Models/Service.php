<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

    protected $fillable = [
        'workshop_id',
        'user_id',
        'customer_name',
        'customer_phone',
        'vehicle_type',
        'vehicle_models',
        'license_plate',
        'service_category',
        'service_mode',
        'service_option',
        'problem_description',
        'address',
        'image',
        'approval_status',
        'work_status',
        'scheduled_at',
        'completed_at',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function workshops()
    {
        return $this->belongsTo(Workshop::class);
    }

    public function service_logs()
    {
        return $this->hasMany(Service_log::class);
    }

    public function feedbacks(){
        return $this->hasOne(Feedback::class);
    }
}
