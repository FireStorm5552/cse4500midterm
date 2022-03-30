<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
	protected $fillable = ['name','salesphone', 'salesemail', 'techphone', 'techemail'];
	    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }
}
