<?php

namespace App\Http\Interfaces\User;

interface FavoriteInterface
{
    public function create($request);

    public function show();

    public function deleteFav($fav);
}
