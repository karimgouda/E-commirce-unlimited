<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\User\AuthInterface;
use App\Http\Requests\User\Auth\LoginRequest;
use App\Http\Requests\User\Auth\StoreRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authInterface;
    public function __construct(AuthInterface $auth)
    {
        $this->authInterface = $auth;
    }
    public function login()
    {
        return $this->authInterface->login();
    }
    public function signIn(LoginRequest $request)
    {
        return $this->authInterface->signIn($request);
    }
    public  function register()
    {
        return $this->authInterface->register();
    }
    public function signUp(StoreRequest $request)
    {
        return $this->authInterface->signUp($request);
    }
    public function logout( )
    {
        return $this->authInterface->logout();
    }
}
