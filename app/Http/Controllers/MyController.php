<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use App\Transformers\UserTransformer;
use App\User;
use App\Http\Requests\MyRequest;

class MyController extends ApiGuardController
{
    public function test(MyRequest $request)
    {
        $users = User::all();

        return $this->response->withCollection($users, new UserTransformer);
    }
}
