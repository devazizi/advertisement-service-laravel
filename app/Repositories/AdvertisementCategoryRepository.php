<?php

namespace App\Repositories;

use App\Models\AdvertisementCategory;

class AdvertisementCategoryRepository
{
    public function __construct()
    {

    }

    public function indexAdCategories()
    {
        return AdvertisementCategory::query()
        ->with('childrenCategories')
        ->whereNull('parent_id')
        ->get();
    }
}
