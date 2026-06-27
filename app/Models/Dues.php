<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dues extends Model
{
    /** @use HasFactory<\Database\Factories\DuesFactory> */
    use HasFactory;

    protected $fillable = [
        'dues_name',
        'dues_num',
        'dues_type'
    ];
}
