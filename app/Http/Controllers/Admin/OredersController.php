<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\OrdersInterface;
use Illuminate\Http\Request;

class OredersController extends Controller
{
    private $ordersInterface;
    public function __construct(OrdersInterface $orders)
    {
        $this->ordersInterface = $orders;
    }

    public function show()
    {
        return $this->ordersInterface->show();
    }
    public function delete($order)
    {
        return $this->ordersInterface->delete($order);
    }
}
