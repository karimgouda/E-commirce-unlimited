<?php

namespace App\Http\Repositories\User;

use App\Http\Interfaces\User\HomeInterface;
use App\Http\Traits\CartsTrait;
use App\Http\Traits\Redis\CategoryRedis;
use App\Http\Traits\Redis\ProductRedis;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Ads;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeRepository implements HomeInterface
{
use CategoryRedis,ProductRedis,CartsTrait;
    public function index()
    {
        $ads = Ads::get('image');
        $products = Product::paginate(8);
       return view('EndUser.index',compact('ads','products'));
    }
    public function getCategoryOfProduct($id)
    {
       $category = Category::with('products')->findOrFail($id);
        return view('EndUser.pages.category_product',compact('category'));
    }

    public function productDetails($product)
    {
        return view('EndUser.pages.productDetails',compact('product'));
    }
    public function search($request)
    {
        $search = $request->input('search');
        $products = Product::where('name','like',"$search%")->get();
        return view('EndUser.pages.result',compact('products'));
    }
}
