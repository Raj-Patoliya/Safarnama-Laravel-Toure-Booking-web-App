<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'package';
    protected $fillable = [
        'pack_title',
        'origin',
        'destination',
        'days', 
        'nights',
        'price', 
        'policy',
        'activity',
        'dayplanning', 
        'poster_image',
        'start_date', 
        'end_date', 
        'status'
    ];
}
