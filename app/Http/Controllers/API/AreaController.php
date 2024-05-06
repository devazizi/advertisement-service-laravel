<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\AreaService;

class AreaController extends Controller
{
    public function indexCities(AreaService $areaService)
    {
        $provinces = $areaService->indexProvinces();

        return $provinces;
    }
}
