<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requester extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
