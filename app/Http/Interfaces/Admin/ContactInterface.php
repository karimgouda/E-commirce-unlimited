<?php

namespace App\Http\Interfaces\Admin;

interface ContactInterface
{
    public function index();

    public function updateStatus($contact);

    public function delete($contact);
}
