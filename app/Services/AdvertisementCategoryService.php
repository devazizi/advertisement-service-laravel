<?php

namespace App\Services;

use App\Repositories\AdvertisementCategoryRepository;

class AdvertisementCategoryService
{
    public AdvertisementCategoryRepository $adCategoryRepo;

    public function __construct()
    {
        $this->adCategoryRepo = new AdvertisementCategoryRepository();
    }

    public function indexAdCategories()
    {
        return $this->adCategoryRepo->indexAdCategories();
    }
}
