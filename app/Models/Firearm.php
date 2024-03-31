<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firearm extends Model
{
    use HasFactory;

    protected $table = 'firearms';

    protected $fillable = [
        'case_id',
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
        'image_filename',
        'qty',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
