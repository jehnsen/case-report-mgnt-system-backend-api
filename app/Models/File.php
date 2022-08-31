<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $table = 'files';

    protected $fillable = [
        'case_id',
        'filename',
        'filetype'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
