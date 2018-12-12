<?php

namespace App\Modules\Auth\Services;

use App\Modules\Auth\Contracts\AuthServiceInterface;
use App\Modules\Auth\Repositories\AuthRepository;


class AuthService  implements AuthServiceInterface   
{

    private $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

}

