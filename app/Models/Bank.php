<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Bank extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'name_en',
        'name_ur'
    ];
}