<?php

namespace App\Http\Interfaces\Admin;

interface OrdersInterface
{
    public function show();

    public function delete($order , $ord);
}
