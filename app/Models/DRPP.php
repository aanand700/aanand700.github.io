<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DRPP extends Model
{
    use HasFactory;

    protected $table = 'drpp';

    protected $fillable = [
        'program_type',
        'contact_first_name',
        'contact_last_name',
        'address',
        'city',
        'state',
        'zip_code',
        'scl_account',
        'contact_email',
        'baseline_kwh',
        'contractor_company',
        'contractor_name',
        'contractor_email',
        'sdci_permit',
        'equipment_pictures',
        'purchase_invoices'
    ];
}
