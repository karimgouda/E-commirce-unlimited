<?php

namespace App\Http\Repositories\User;

use App\Http\Interfaces\User\CartInterface;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\String\b;

class CartRepository implements CartInterface
{
    public function cart($request)
    {
        Cart::create([
            'product_id'=>$request->product_id,
            'user_id'=>Auth::id(),
        ]);
        return back();
    }
    public function cartShow()
    {
        return view('EndUser.pages.cart');
    }
    public function delete($cart)
    {
        $cart = Cart::findOrFail($cart);
        $cart->delete();
        toast('Cart Deleted successflay','success');
        return back();
    }
}
