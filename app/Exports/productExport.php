<?php

namespace App\Exports;

use App\Models\Admin\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class productExport implements FromView
{

    public function view(): View
    {
        $products = Product::get();
        return \view('Admin.pages.product.export.exportProduct');
    }
}
