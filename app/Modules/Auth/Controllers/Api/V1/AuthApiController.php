<?php

namespace App\Modules\Auth\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Facades\AuthService;
use App\Modules\Auth\Requests\Api\V1\AuthGetUsersRequest;


class AuthApiController extends Controller 
{


    public function getUsers(AuthGetUsersRequest $request )
    {
        $request->validated();
        return AuthService::getUsers( $request->all());
    }


}

