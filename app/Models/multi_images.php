<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multi_images extends Model
{
    use HasFactory;
    protected $table = 'multi_images';
    protected $fillable = [
        'image_id',
        'pack_id',
        'image'
    ];
}
