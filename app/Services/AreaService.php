<?php

namespace App\Services;

use App\Repositories\AreaRepository;

class AreaService
{
    private $areaRepo;

    public function __construct()
    {
        $this->areaRepo = new AreaRepository();
    }

    public function indexProvinces()
    {
        return $this->areaRepo->indexProvinces();
    }
}
