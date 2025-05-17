<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Group extends Model implements Auditable
{
    use SoftDeletes, HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'group_code',
        'name_eng',
        'name_ur',
        'description_eng',
        'description_ur',
        'address_eng',
        'address_ur',
        'image',
        'v_type',
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
