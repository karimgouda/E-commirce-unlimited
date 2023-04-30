<?php

namespace App\Http\Traits;

use App\Models\Admin\Product;

trait ProductTrait
{

    private function getProduct()
    {
        return Product::with('category:id,name')->get();
    }

}
