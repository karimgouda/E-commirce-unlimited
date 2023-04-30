<?php

namespace App\Http\Interfaces\User;

interface OrderInterface
{
    public function order($request , $cart);

    public function checkOut();
}
