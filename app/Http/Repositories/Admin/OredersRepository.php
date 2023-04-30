<?php

namespace App\Http\Repositories\Admin;

use App\Models\Order;
use App\Models\OrderDetalis;

class OredersRepository implements \App\Http\Interfaces\Admin\OrdersInterface
{

    public function show()
    {
        $orders = OrderDetalis::with('user')->get();
        $order_user = Order::with('cart','user')->get();
        return view('Admin.pages.orders.orders',compact('orders','order_user'));
    }

    public function delete($order , $ord)
    {
        $order->delete();
        $ord->delete();
        toast('Order Deleted Success','success');
        return back();
    }
}
