<?php

namespace App\Services;

use App\Repositories\AdvertisementRepository;

class AdvertisementService
{
    private AdvertisementRepository $adRepo;

    public function __construct()
    {
        $this->adRepo = new AdvertisementRepository();
    }

    public function indexAdsForClients()
    {
        return $this->adRepo->indexAdsForClient();
    }
}
