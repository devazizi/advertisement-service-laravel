<?php

namespace App\Repositories;

use App\Models\Advertisement;

class AdvertisementRepository
{
    public function indexAdsForClient()
    {
        return Advertisement::with(['advertisementCategory:id,name,name_en,slug', 'address' => function($query) {
            $query->with('city.province');
        }])
        ->verifiedAds()
        ->paginate();
    }
}
