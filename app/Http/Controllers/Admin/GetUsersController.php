<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AllUsersInterface;
use App\Models\User;
use Illuminate\Http\Request;

class GetUsersController extends Controller
{
    private $UsersInterface;

    public function __construct(AllUsersInterface $users)
    {
        $this->UsersInterface = $users;
    }

    public function index()
    {
        return $this->UsersInterface->index();
    }

    public function panUser($user)
    {
        return $this->UsersInterface->pan($user);
    }
    public function delete($user)
    {
        return $this->UsersInterface->delete($user);
    }
}
