<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'employee';
    protected $casts = [
        'birthdate' => 'date',
        'date_hired' => 'date',
    ];
    protected $fillable = [
        'middle_name',
        'address',
        'zip_code',
        'birthdate',
        'date_hired',
    ];
}
