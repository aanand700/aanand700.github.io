<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $table = 'user_details';

    protected $fillable = [
        'user_id',
        'address',
        'city',
        'state',
        'zip_code',
        'utility_name',
        'utility_acc_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
