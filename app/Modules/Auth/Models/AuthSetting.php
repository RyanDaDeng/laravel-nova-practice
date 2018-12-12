<?php

namespace App\Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;


class AuthSetting extends Model
{

    protected $table = 'settings';

    protected $casts = [
        'value' => 'array'
    ];
}

