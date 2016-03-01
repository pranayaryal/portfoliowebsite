<?php

namespace App\Http\Controllers;

use App\AuthenticateUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function login(AuthenticateUser $authenticateUser, Request $request)
    {
        return $authenticateUser->execute($request->has('code'));
    }
}
