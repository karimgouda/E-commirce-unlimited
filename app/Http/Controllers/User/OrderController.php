<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\User\OrderInterface;
use App\Http\Requests\User\OrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderInterface;

    public function __construct(OrderInterface $order)
    {
        $this->orderInterface = $order;
    }
    public function order(OrderRequest $request , $cart)
    {
       return $this->orderInterface->order($request , $cart);
    }

    public function checkOut()
    {
        return $this->orderInterface->checkOut();
    }
}
