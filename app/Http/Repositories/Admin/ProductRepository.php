<?php

namespace App\Http\Repositories\Admin;

use App\Exports\productExport;
use App\Http\services\LocalizationServices;
use App\Http\Traits\CategoryTrait;
use App\Http\Traits\ImageTrait;
use App\Http\Traits\Redis\ProductRedis;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use function Symfony\Component\Translation\t;

class ProductRepository implements \App\Http\Interfaces\Admin\ProductInterface
{
use ImageTrait ,ProductRedis ,CategoryTrait;

    private $productModel;
    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }

    public function index()
    {
        $products = $this->getProductRedis();
        return view('Admin.pages.product.index',compact('products'));
    }

    public function create()
    {
        $categories = $this->getCategory();
        return view('Admin.pages.product.create',compact('categories'));
    }

    public function store($request)
    {
        $data = LocalizationServices::getLocalizationWithArray($this->productModel::$translatableData , $request);
        $imageName = $this->uploadImage($request->image,$this->productModel::PATH);
        $this->productModel::create(array_merge($data , [
            'price'=>$request->price,
            'count'=>$request->count,
            'category_id'=>$request->category_id,
            'image'=>$imageName,
        ]));
        $this->setProductRedis();
        toast('Add Product Successfully','success');
        return redirect(route('admin.product.index'));
    }

    public function edit($product)
    {
        $categories = $this->getCategory();
        return view('Admin.pages.product.edit',compact('product','categories'));
    }

    public function update($request, $product)
    {
        $data = LocalizationServices::getLocalizationWithArray($this->productModel::$translatableData , $request);
        if($request->image){
            $imageName = $this->uploadImage($request->image,$this->productModel::PATH,$product->getRawOriginal('image'));
        }
        $product->update(array_merge($data , [
            'price'=>$request->price,
            'count'=>$request->count,
            'category_id'=>$request->category_id,
            'image'=>$imageName ?? $product->getRawOriginal('image')
        ]));
        $this->setProductRedis();
        toast('Product Updated Successflay','success');
        return redirect(route('admin.product.index'));
    }

    public function delete($product)
    {
        Storage::delete($product->image);
        $product->delete();
        $this->setProductRedis();
        toast('Product deleted Successflay','success');
        return back();
    }

    public function exportProduct(): BinaryFileResponse
    {
        return Excel::download(new productExport() , 'productExport.xlsx');
    }
}
