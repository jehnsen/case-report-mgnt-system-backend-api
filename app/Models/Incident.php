<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'division',
        'case_no',
        'case_nature',
        'requesting_party',
        'incident_title',
        'incident_description',
        'investigator',
        'disposition',
        'location',
        'incident_date',
        'incident_time',
        'victim',
        'suspect',
        'engine_no',
        'chassis_no',
        'reported_by',
        'encoder_id',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
