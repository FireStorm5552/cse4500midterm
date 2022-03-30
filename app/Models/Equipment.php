<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
	protected $fillable = ['name','processor', 'ram', 'type', 'manufacturer_id', 'purchase_id', 'uzer_id'];
	public function manufacturer()
	{
    return $this->belongsTo(Manufacturer::class);
    }
	public function purchases()
    {
    return $this->belongsTo(Purchase::class);
    }
    public function notes()
    {
    return $this->hasMany(Note::class);
    }
	public function uzers()
    {
    return $this->hasMany(Uzer::class);
    }
}
