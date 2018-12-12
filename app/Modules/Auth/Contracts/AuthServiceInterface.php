<?php

namespace App\Modules\Auth\Contracts;


interface AuthServiceInterface
{
    public function getUsers($name,$id);

    public function getUsers($data =[]);

}

