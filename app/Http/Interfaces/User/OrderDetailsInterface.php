<?php

namespace App\Http\Interfaces\User;

interface OrderDetailsInterface
{
    public function create($request);

    public function getOrder();

    public function invoice();
}
