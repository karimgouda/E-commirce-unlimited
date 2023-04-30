<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\SettingInterface;
use App\Http\Requests\SettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $settingInterface;
    public function __construct(SettingInterface $setting)
    {
        $this->settingInterface = $setting;
    }

    public function index()
    {
        return $this->settingInterface->index();
    }

    public function create()
    {
        return $this->settingInterface->create();
    }

    public function store(SettingRequest $request)
    {
        return $this->settingInterface->store($request);
    }

    public function edit(Setting $setting)
    {
        return $this->settingInterface->edit($setting);
    }

    public function update(UpdateSettingRequest $request , Setting $setting)
    {
        return $this->settingInterface->update($request , $setting);
    }

    public function delete(Setting $setting)
    {
        return $this->settingInterface->delete($setting);
    }
}
