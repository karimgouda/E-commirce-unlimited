<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\User\CartInterface;
use App\Http\Requests\User\CartRequest;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $cartInterface;

    public function __construct(CartInterface $cart)
    {
        $this->cartInterface = $cart;
    }
    public function cart(CartRequest $request)
    {
        return $this->cartInterface->cart($request);
    }

    public function cartShow()
    {
        return $this->cartInterface->cartShow();
    }

    public function delete($cart)
    {
        return $this->cartInterface->delete($cart);
    }
}
