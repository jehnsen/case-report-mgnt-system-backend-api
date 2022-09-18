<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposition extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'division'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
