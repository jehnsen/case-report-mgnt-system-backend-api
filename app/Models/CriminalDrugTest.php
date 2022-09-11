<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriminalDrugTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_no',
        'suspect_name',
        'mother_unit',
        'operation_type',
        'examiner',
        'investigator',
        'incident_date',
        'incident_time',
        'speciment_count',
        'pph_count',
        'qty_received',
        'gross_weight',
        'classification',
        'delivered_by',
        'description',
        'received_by',
        'evidence_status',
        'qty_turned_over',
        'date_last_withdrawn',
        'court_branch',
        'criminal_case_no',
        'qty_remaining',
        'is_no_movement',
        'requesting_party',
        'remarks'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
