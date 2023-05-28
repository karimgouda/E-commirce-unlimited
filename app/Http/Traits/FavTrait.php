<?php

namespace App\Http\Traits;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

trait FavTrait
{
    public function showFav()
    {
       return Favorite::with(['product','user'])->where('user_id',Auth::id())->get();
    }
}
