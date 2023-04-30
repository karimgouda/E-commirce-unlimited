<?php

namespace App\Http\Interfaces\Admin;

interface AdsInterface
{
    public function index();

    public function create();

    public function store($request);

    public function edit($ad);

    public function update($request , $ad);

    public function delete($ad);
}
