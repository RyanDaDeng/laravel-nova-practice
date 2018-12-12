<?php

namespace App\Modules\Auth\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;


class AuthGetUsersRequest extends FormRequest 
{


    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          'name'=>'required',
          'id'=>'integer'
      ];
    }

}

