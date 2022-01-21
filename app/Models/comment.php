<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'comment_id',
        'post_id',
        'user_id',
        'comment',
        'updated_at', 
        'created_at'
    ];
}
