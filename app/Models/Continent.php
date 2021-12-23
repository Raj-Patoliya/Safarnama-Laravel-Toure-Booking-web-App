<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;
    protected $table = 'continents';
    protected $fillable = [
    'continent_name'
    ];

	public function sub()
	{
		return $this->hasMany(Continent::class, 'parents_id');
	}

}
