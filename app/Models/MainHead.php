<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;


use Illuminate\Database\Eloquent\Model;

class MainHead extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = ['name_english','name_urdu'];

}
