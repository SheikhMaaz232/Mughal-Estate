<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Company extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'name_eng',
        'name_ur',
        'email',
        'phone',
        'website',
        'address',
        'logo',
        'description'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuditData()
    {
        return [
            'extra_field' => 'value', // You can add extra custom fields here
        ];
    }
}
