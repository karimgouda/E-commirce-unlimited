<?php

namespace App\Http\Repositories\User;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderRepository implements \App\Http\Interfaces\User\OrderInterface
{

    public function order($request , $cart)
    {
       $cart = Cart::findOrFail($cart);

      $order =  Order::create([
            'cart_id'=>$cart->id,
            'quantity'=>$request->quantity,
          'total'=>$request->quantity * $cart->product->price,
          'user_id'=>Auth::id()
        ]);
      toast('Add Order Successflay','success');
      return back();
    }

    public function checkOut()
    {
        return view('EndUser.pages.checkOut');
    }
}
