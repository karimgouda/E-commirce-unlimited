<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdsInterface;
use App\Http\Requests\Admin\StoreAdsRequest;
use App\Http\Requests\Admin\UpdateAdsRequest;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    private $adsInterface;

    public function __construct(AdsInterface $ads)
    {
        $this->adsInterface = $ads;
    }

    public function index()
    {
        return $this->adsInterface->index();
    }

    public function create()
    {
        return $this->adsInterface->create();
    }

    public function store(StoreAdsRequest $request)
    {
        return $this->adsInterface->store($request);
    }
    public function edit(Ads $ad)
    {
        return $this->adsInterface->edit($ad);
    }

    public function update(UpdateAdsRequest $request ,Ads $ad)
    {
        return $this->adsInterface->update($request ,$ad);
    }

    public function delete(Ads $ad)
    {
        return $this->adsInterface->delete($ad);
    }

}
