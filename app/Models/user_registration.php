<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_registration extends Model
{
    use HasFactory;
    protected $table = 'user_registrations';

    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'dob',
        'email',
        'password',
        'phone',
        'images',
        'address'
  
    ];
}
