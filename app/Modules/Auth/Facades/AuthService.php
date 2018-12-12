<?php

namespace App\Modules\Auth\Facades;

use App\Modules\Auth\Contracts\AuthServiceInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Collection getUsers($name,$id)
 * @method static Collection getUsers($data =[])
 */
class AuthService extends Facade 
{


    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return AuthServiceInterface::class;
    }

}

