<?php

namespace App\Http\Repositories\User;

use App\Http\Traits\CartsTrait;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetalis;
use Illuminate\Support\Facades\Auth;

class OrederDetelisRepository implements \App\Http\Interfaces\User\OrderDetailsInterface
{
use CartsTrait;
    public function create($request)
    {
        $data = OrderDetalis::create([
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address_one'=>$request->address_one,
            'address_tow'=>$request->address_tow,
            'country'=>$request->country,
            'city'=>$request->city,
            'user_id'=>Auth::id()
        ]);
        return redirect(route('endUser.getOrder'));
    }
    public function getOrder()
    {
        return view('EndUser.pages.getOrder');
    }
    public function invoice()
    {
      $order = OrderDetalis::where('user_id','=',Auth::id())->first();
      $orders = Order::where('user_id' , '=' , Auth::id())->get();
       return view('EndUser.pages.invoice',compact('order','orders'));
    }
}
