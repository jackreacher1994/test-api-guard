<?php

namespace App\Http\Requests;

use Chrisbjr\ApiGuard\Http\Requests\ApiGuardFormRequest;

class MyRequest extends ApiGuardFormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}