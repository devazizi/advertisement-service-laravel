<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\AdvertisementService;

class AdvertisementController extends Controller
{

    public function __construct(private AdvertisementService $adsService)
    {

    }

    public function indexAdvertisementsForClientByPagination()
    {
        return $this->adsService->indexAdsForClients();
    }

    public function getAdvertisementForClient(int $advertisementId)
    {
        // $this->adsService-

        return $advertisementId;
    }
}
