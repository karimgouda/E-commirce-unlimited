<?php

namespace App\Http\Repositories\User;

use App\Models\Admin\Product;

class ShopRepository implements \App\Http\Interfaces\User\ShopInterface
{

    public function shop()
    {
        $products = Product::get();
        return view('EndUser.pages.shop',compact('products'));
    }

    public function filter($request)
    {
        $products = Product::where('price',$request->price)->get();
        return view('EndUser.pages.shop',compact('products'));

    }
}
