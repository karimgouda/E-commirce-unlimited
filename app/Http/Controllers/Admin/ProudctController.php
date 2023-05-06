<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Requests\Admin\product\StoreRequest;
use App\Http\Requests\Admin\product\UpdateRequest;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProudctController extends Controller
{
   private $productInterface;
    public function __construct(ProductInterface $product)
    {
        $this->productInterface = $product;
    }
    public function index()
    {
        return $this->productInterface->index();
    }
    public function create()
    {
        return $this->productInterface->create();
    }
    public function store(StoreRequest $request)
    {
        return $this->productInterface->store($request);
    }
    public  function edit(Product $product)
    {
        return $this->productInterface->edit($product);
    }
    public function update(UpdateRequest $request , Product $product)
    {
        return $this->productInterface->update($request ,$product);
    }
    public function delete(Product $product)
    {
        return $this->productInterface->delete($product);
    }

    public function exportProduct()
    {
        return $this->productInterface->exportProduct();
    }
}
