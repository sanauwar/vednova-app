<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreeConsultation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'interest',
        'ip_address'
    ];
}
