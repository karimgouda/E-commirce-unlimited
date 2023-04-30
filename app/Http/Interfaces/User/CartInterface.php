<?php

namespace App\Http\Interfaces\User;

interface CartInterface
{
    public function cart($request);
    public function cartShow();
    public function delete($cart);
}
