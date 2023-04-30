<?php

namespace App\Http\Repositories\Admin;

use App\Models\User;

class AllUsersRepository implements \App\Http\Interfaces\Admin\AllUsersInterface
{

    public function index()
    {
        $users = User::get(['id','name','email','phone','address','active','role']);
        return  view('Admin.pages.Users.index',compact('users'));
    }

    public function pan($user)
    {
        $user = User::find($user);
        if($user->active == 1){
            $user->update(["active"=>0]);
        }else{
            $user->update(["active"=>1  ]);
        }
        toast('Pan User Successflay','success');
        return redirect(route('admin.users.index'));
    }

    public function delete($user)
    {
        $user = User::find($user);
        $user->delete();
        toast('User Deleted Successflay','success');
        return redirect(route('admin.users.index'));
    }
}
