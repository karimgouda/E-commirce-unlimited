<?php

namespace App\Http\Repositories\User;

use App\Http\Interfaces\User\AuthInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{


    public function login()
    {
         return view('EndUser.Auth.login');
    }

    public function signIn($request)
    {
        $is_login = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if ($is_login !=true || Auth::user()->active == 0){
            return redirect(route('endUser.auth.login'));
        }
        return  redirect(route('endUser.index'));
    }

    public function register()
    {
        return view('EndUser.Auth.index');
    }

    public function signUp($request)
    {
       $user = User::create([
           'name'=>$request->name,
           'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password)
        ]);
        Auth::login($user);
        return redirect(route('endUser.index'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('endUser.auth.login'));
    }
}
