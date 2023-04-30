<?php

namespace App\Http\Interfaces\User;

interface ShopInterface
{
    public function shop();

    public function filter($request);
}
