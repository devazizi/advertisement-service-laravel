<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\AdvertisementCategoryService;

class AdvertisementCategoryController extends Controller
{
    public function __construct(private AdvertisementCategoryService $adCategoryService)
    {

    }

    public function indexAdvertisementCategories()
    {

        $indexAdCategories = $this->adCategoryService->indexAdCategories();

        return response()->json($indexAdCategories);
    }
}
