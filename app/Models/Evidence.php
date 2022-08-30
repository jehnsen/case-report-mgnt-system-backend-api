<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;
    protected $table = 'evidences';

    protected $fillable = [
        'case_id',
        'description'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
