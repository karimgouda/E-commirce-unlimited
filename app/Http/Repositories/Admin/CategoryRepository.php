<?php

namespace App\Http\Repositories\Admin;

use App\Http\services\LocalizationServices;
use App\Http\Traits\CategoryTrait;
use App\Http\Traits\ImageTrait;
use App\Http\Traits\Redis\CategoryRedis;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Storage;

class CategoryRepository implements \App\Http\Interfaces\Admin\CategoryInterface
{
use CategoryRedis,ImageTrait;
private $categoryModel;
    public function __construct(Category $category)
    {
        $this->categoryModel = $category;
    }

    public function index()
    {
        $categories = $this->getCategoryRedis();
        return view('Admin.pages.category.index',compact('categories'));
    }

    public function create()
    {
       return view('Admin.pages.category.create');
    }

    public function store($request)
    {
        $data = LocalizationServices::getLocalizationWithArray(Category::$translatableData , $request);
        $imageName = $this->uploadImage($request->image , $this->categoryModel::PATH);
        $this->categoryModel::create(array_merge($data , [
            'image'=>$imageName
        ]));
        $this->setCategoryRedis();
        toast('Add Category Successfully','success');
        return redirect(route('admin.category.index'));
    }

    public function edit($category)
    {
        return view('Admin.pages.category.edit',compact('category'));
    }

    public function update($request, $category)
    {
        $data = LocalizationServices::getLocalizationWithArray(Category::$translatableData , $request);
        if ($request->image){
            $imageName = $this->uploadImage($request->image,$this->categoryModel::PATH,$category->getRawOriginal('image'));
        }
        $category->update(array_merge($data , [
            'image' => $imageName??$category->getRawOriginal('image')
        ]));
        $this->setCategoryRedis();
        toast('Category Updated Successflay','success');
        return redirect(route('admin.category.index'));
    }

    public function delete($category)
    {
        Storage::delete($category->image);
        $category->delete();
        $this->setCategoryRedis();
        toast('Category deleted Successflay','success');
        return back();
    }
}
