<?php

namespace App\Http\Interfaces\User;

interface AuthInterface
{
    public function login();
    public function signIn($request);
    public function register();
    public function signUp($request);
    public function logout();

}
