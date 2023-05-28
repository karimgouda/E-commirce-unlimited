<?php

namespace App\Http\Repositories\User;

use App\Http\Interfaces\User\FavoriteInterface;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteRepository implements FavoriteInterface
{

    public function create($request)
    {
        $request->validate([
            'product_id'=>'required|exists:products,id'
        ]);
        $user_id = Auth::id();
        $fav = new Favorite();
        $fav->product_id = $request->product_id;
        $fav->user_id = $user_id;
        $fav->save();
        return back();
    }

    public function show()
    {
        return view('EndUser.pages.fav');
    }

    public function deleteFav($fav)
    {
        $fav->delete();
        toast('Fav Deleted Successfully','success');
        return back();
    }
}
