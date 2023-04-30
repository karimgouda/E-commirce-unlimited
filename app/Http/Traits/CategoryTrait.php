<?php

namespace App\Http\Traits;

use App\Models\Admin\Category;

trait CategoryTrait
{
    private function getCategory()
    {
            return Category::with('products')->get();
    }
}
