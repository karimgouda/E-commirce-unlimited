<?php

namespace App\Http\Interfaces\User;

interface ContactInterface
{
    public function index();

    public function store($request);
}
