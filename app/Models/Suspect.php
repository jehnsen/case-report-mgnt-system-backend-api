<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspect extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_id',
        'firstname',
        'middlename',
        'lastname',
        'address',
        'age',
        'gender',
        'civil_status',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
