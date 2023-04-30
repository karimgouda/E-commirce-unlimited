<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\User\ShopInterface;
use App\Http\Requests\Admin\product\StoreRequest;
use App\Http\Requests\User\FilterRequest;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $shopInterface;
    public function __construct(ShopInterface $shop)
    {
        $this->shopInterface = $shop;
    }

    public function shop()
    {
        return $this->shopInterface->shop();
    }

    public function filter(FilterRequest $request)
    {
        return $this->shopInterface->filter($request);
    }
}
