<?php

namespace App\Http\Interfaces\Admin;

interface AllUsersInterface
{
    public function index();
    public function pan($user);

    public function ActiveUsers();

    public function InActiveUsers();
    public function delete($user);
}
