<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Project extends Model implements Auditable
{
    use SoftDeletes, HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'group_id',
        'company_id',
        'name_en',
        'name_ur',
        'project_code',
        'debit_code',
        'description_en',
        'description_ur',
        'phase_en',
        'phase_ur',
        'address_en',
        'address_ur',
        'phase_map',
    ];

    protected $casts = [
        'group_id' => 'integer',
        'company_id' => 'integer',
    ];
}