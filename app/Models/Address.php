<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public $fillable = ['city_id', 'name', 'address', 'lat', 'lot', 'postal_code'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
