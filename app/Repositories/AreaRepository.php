<?php

namespace App\Repositories;

use App\Models\Province;

class AreaRepository
{
    public function __construct()
    {
    }

    public function indexProvinces()
    {
        return Province::query()
            ->select(['id', 'name_en', 'name', 'slug'])
            ->with(['cities' => function ($q) {
                $q->select(['id', 'name', 'name_en', 'slug']);
            }])
            ->get();
    }
}
