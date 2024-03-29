<?php

namespace App\Http\Traits\Redis;

use App\Http\Traits\ProductTrait;
use Illuminate\Support\Facades\Redis;

trait ProductRedis
{
    use ProductTrait;
    private function setProductRedis(){
        $redis = Redis::connection();
        $products = $this->getProduct();
        $redis->set('products',$products);
        return true;
    }
    private function getProductRedis()
    {
        $redis = Redis::connection();
        $data = json_decode($redis->get('{products}'));
        return empty($data)?$this->getProduct():$data;
    }

}
