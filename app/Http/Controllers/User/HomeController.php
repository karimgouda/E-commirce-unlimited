<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\User\HomeInterface;
use App\Http\Requests\User\CartRequest;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $homeInterface;
    public function __construct(HomeInterface $home)
    {
        $this->homeInterface = $home;
    }
    public function index()
    {
        return $this->homeInterface->index();
    }
    public function category($id)
    {
        return $this->homeInterface->getCategoryOfProduct($id);
    }

    public function productDetails(Product $product)
    {
        return $this->homeInterface->productDetails($product);
    }
    public function search(Request $request)
    {
        return $this->homeInterface->search($request);
    }

}
