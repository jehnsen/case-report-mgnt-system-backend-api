<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirearmInventory extends Model
{
    use HasFactory;

    protected $table = 'firearminventory';

    protected $fillable = [
        'case_no',
        'firearm_name',
        'cartridge',
        'fcc',
        'fb',
        'accessories',
        'fcaliber',
        'fmake',
        'fmodel',
        'ftype',
        'fserial_no',
        'requesting_party',
        'incident_date',
        'incident_time',
        'location',
        'suspect_name',
        'victim_name',
        'status',
        'remarks',
        'encoder_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
