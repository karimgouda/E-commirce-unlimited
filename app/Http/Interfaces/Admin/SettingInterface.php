<?php

namespace App\Http\Interfaces\Admin;

interface SettingInterface
{
    public function index();

    public function create();

    public function store($request);

    public function edit($setting);

    public function update($request , $setting);
    public function delete($setting);
}
