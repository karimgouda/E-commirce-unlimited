<?php

namespace App\Http\Repositories\Admin;

use App\Http\Traits\ImageTrait;
use App\Models\Ads;
use Illuminate\Support\Facades\Storage;

class AdsRepository implements \App\Http\Interfaces\Admin\AdsInterface
{
use ImageTrait;
private $AdsModel;

    public function __construct(Ads $ads)
    {
      $this->AdsModel = $ads;
    }
    public function index()
    {
        $ads = $this->AdsModel::get();
        return view('Admin.pages.Ads.index',compact('ads'));
    }

    public function create()
    {
        return view('Admin.pages.Ads.create');
    }

    public function store($request)
    {
        $imageName = $this->uploadImage($request->image , $this->AdsModel::PATH);
        $this->AdsModel::create([
           'name'=>['en'=>$request->name_en , 'ar'=>$request->name_ar],
            'image'=>$imageName,
        ]);
        toast('Add Ads Successflay','success');
        return back();
    }

    public function edit($ad)
    {
        return view('Admin.pages.Ads.edit',compact('ad'));
    }

    public function update($request ,$ad)
    {
        if ($request->image){
            $imageName = $this->uploadImage($request->image,$this->AdsModel::PATH,$ad->getRawOriginal('image'));
        }
       $ads = $ad->update([
            'name'=>['en'=>$request->name_en ,'ar'=>$request->name_ar],
            'image'=>$imageName ?? $ad->getRawOriginal('image')
        ]);
        toast('Ads Updated Successflay','success');
        return redirect(route('admin.ads.index'));
    }

    public function delete($ad)
    {
        Storage::delete($ad->image);
        $ad->delete();
        toast('Ads deleted Successflay','success');
        return back();
    }
}
