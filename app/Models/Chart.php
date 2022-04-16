<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $dates = [
        'date' => 'date:d.m.Y',
    ];

    protected $dateFormat = 'date:d.m.Y';

    protected $fillable = [
        'date',
        'number'
    ];
}
