<?php

namespace App\Http\Repositories\Admin;

use App\Jobs\ActiveUsersJob;
use App\Jobs\InActiveUsersJob;
use App\Models\User;
use Illuminate\Foundation\Application as ApplicationAlias;
use Illuminate\Routing\Redirector;
use RealRashid\SweetAlert\Facades\Alert;

class AllUsersRepository implements \App\Http\Interfaces\Admin\AllUsersInterface
{

    public function index()
    {
        $users = User::paginate(10);
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

    public function ActiveUsers()
    {
        ActiveUsersJob::dispatch();
        Alert::success('loading Active', 'Success Message');
        return back();
    }
    public function InActiveUsers()
    {
        InActiveUsersJob::dispatch();
        Alert::success('loading InActive', 'Success Message');
        return back();
    }

    public function delete($user)
    {
        $user = User::find($user);
        $user->delete();
        toast('User Deleted Successflay','success');
        return redirect(route('admin.users.index'));
    }
}
