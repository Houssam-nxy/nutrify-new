<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthData extends Model
{
    use HasFactory;

    protected $fillable = [
        'height',
        'weight',
        'age',
        'gender',
        'condition',
        'ethnicity',
        'about',
    ];
}
