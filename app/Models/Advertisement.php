<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    public const PAYMENT_TYPE = [

    ];

    public $fillable = [
        'client_id', 'advertisement_category_id', 'name',
        'description', 'payment_type', 'price', 'is_verified'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function advertisementCategory()
    {
        return $this->belongsTo(AdvertisementCategory::class);
    }
}
