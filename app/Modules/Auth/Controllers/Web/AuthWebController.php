<?php

namespace App\Modules\Auth\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Facades\AuthService;
use App\Modules\Auth\Requests\Web\AuthGetUsersRequest;


class AuthWebController extends Controller 
{


    public function getUsers(AuthGetUsersRequest $request )
    {
        $request->validated();
        return AuthService::getUsers($request->query('name'),$request->query('id'));
    }


}

