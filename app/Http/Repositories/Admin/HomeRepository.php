<?php
namespace App\Http\Repositories\Admin;
use App\Http\Interfaces\Admin\HomeInterface;
use RealRashid\SweetAlert\Facades\Alert;

class HomeRepository implements HomeInterface
{

    public function index()
    {
        return view('Admin.index');
    }
}
