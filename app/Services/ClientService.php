<?php

namespace App\Services;

use App\Repositories\ClientRepository;

class ClientService
{
    private ClientRepository $clientRepo;

    public function __construct()
    {
        $this->clientRepo = new ClientRepository();
    }
}
