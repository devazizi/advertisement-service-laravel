<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementCategory extends Model
{
    use HasFactory;

    public $fillable = ['name', 'name_en', 'slug', 'parent_id'];

    public function childrenCategories()
    {
        return $this->hasMany(AdvertisementCategory::class, 'parent_id', 'id');
    }
}
