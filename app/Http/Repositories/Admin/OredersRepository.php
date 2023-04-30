<?php

namespace App\Http\Repositories\Admin;

use App\Models\Order;
use App\Models\OrderDetalis;

class OredersRepository implements \App\Http\Interfaces\Admin\OrdersInterface
{

    public function show()
    {
        $orders = OrderDetalis::get();
        $order_user = Order::get();
        return view('Admin.pages.orders.orders',compact('orders','order_user'));
    }

    public function delete($order)
    {
        $order = OrderDetalis::findOrFail($order);
        $order->delete();
        toast('Order Deleted Success','success');
        return back();
    }
}
