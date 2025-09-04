<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit_log extends Model
{
    /** @use HasFactory<\Database\Factories\AuditLogFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'entity_id',
        'entity',
        'details',
    ];

    public function users ()
    {
        return $this->belongsTo(User::class);
    }
}
