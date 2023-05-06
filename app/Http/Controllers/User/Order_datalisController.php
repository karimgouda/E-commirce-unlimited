<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\User\OrderDetailsInterface;
use App\Http\Requests\User\OrderDetalisRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class Order_datalisController extends Controller
{
    private $orderInterface;
    public function __construct(OrderDetailsInterface $orderDetails)
    {
        $this->orderInterface = $orderDetails;
    }

    public function create(OrderDetalisRequest $request)
    {
        return $this->orderInterface->create($request);
    }

    public function getOrder()
    {
        return $this->orderInterface->getOrder();
    }
    public function invoice()
    {
        return $this->orderInterface->invoice();
    }
}
