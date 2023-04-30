<?php

namespace App\Http\Traits;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

trait CartsTrait
{

    private function getCarts(){
     return Cart::where('user_id','=',Auth::id())->get();

    }
}
