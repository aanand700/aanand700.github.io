<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SBR extends Model
{
    use HasFactory;

    protected $table = 'sbr';

    protected $fillable = [
        'submitted_by',
        'facility_name',
        'installation_street',
        'installation_city',
        'installation_state',
        'installation_zip_code',
        'building_type',
        'is_new_building',
        'first_name',
        'last_name',
        'customer_email',
        'phone_number',
        'account_number',
        'picture_of_the_building',
        'purchase_invoices',
    ];

}
