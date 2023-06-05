<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function state(): belongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): belongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function department(): belongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function country(): belongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
