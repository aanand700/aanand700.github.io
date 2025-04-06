<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EBC extends Model
{
    use HasFactory;

    protected $table = 'ebc';

    protected $fillable = [
        'submitted_by',
        'first_name',
        'last_name',
        'address',
        'city',
        'state',
        'zip_code',
        'email',
        'baseline_kwh',
        'program_option',
        'scl_meter',
        'purchase_invoices',
    ];
}
