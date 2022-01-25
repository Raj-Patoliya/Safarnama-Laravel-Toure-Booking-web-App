<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'book_id',
        'pack_id',
        'user_id',
        'people',
        'amount',
        'date',
        'payment_status',
        'payment_id'
    ];
}
