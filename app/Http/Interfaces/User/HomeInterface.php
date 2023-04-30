<?php

namespace App\Http\Interfaces\User;

interface HomeInterface
{
    public function index();
    public function getCategoryOfProduct($id);

    public function productDetails($product);
    public function search($request);

}
