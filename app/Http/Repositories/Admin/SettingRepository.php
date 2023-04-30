<?php

namespace App\Http\Repositories\Admin;

use App\Models\Setting;

class SettingRepository implements \App\Http\Interfaces\Admin\SettingInterface
{

    public function index()
    {
        $settings = Setting::get();
        return view('Admin.pages.settings.index',compact('settings'));
    }

    public function create()
    {
        return view('Admin.pages.settings.create');
    }

    public function store($request)
    {
        Setting::create([
           'phone'=>$request->phone,
           'address'=>$request->address,
           'email'=>$request->email,
           'desc'=>['en'=>$request->desc_en , 'ar'=>$request->desc_ar]
        ]);
        toast('Setting Create Success','success');
        return redirect(route('admin.setting.index'));
    }

    public function edit($setting)
    {
        return view('Admin.pages.settings.edit',compact('setting'));
    }

    public function update($request, $setting)
    {
        $setting->update([
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'desc'=>['en'=>$request->desc_en , 'ar'=>$request->desc_ar]
        ]);
        toast('Setting Update Success','success');
        return redirect(route('admin.setting.index'));
    }

    public function delete($setting)
    {
       $setting->delete();
       toast('setting delete success','success');
       return back();
    }
}
