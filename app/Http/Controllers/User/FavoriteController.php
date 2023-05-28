<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\User\FavoriteInterface;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    private $favInterface;
    public function __construct(FavoriteInterface $favorite)
    {
        $this->favInterface = $favorite;
    }

    public function indexFav()
    {
        return $this->favInterface->show();
    }

    public function storeFav(Request $request)
    {
        return $this->favInterface->create($request);
    }

    public function deleteFav(Favorite $fav)
    {
        return $this->favInterface->deleteFav($fav);
    }
}
