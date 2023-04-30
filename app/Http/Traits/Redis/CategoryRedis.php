<?php

namespace App\Http\Traits\Redis;

use App\Http\Traits\CategoryTrait;
use Illuminate\Support\Facades\Redis;

trait CategoryRedis
{
    use CategoryTrait;

    private function setCategoryRedis()
    {
        $redis = Redis::connection();
        $categories = $this->getCategory();
        $redis->set('categories',$categories);
        return true;
    }
    private function getCategoryRedis()
    {
        $redis = Redis::connection();
        $data = json_decode($redis->get('{categories}'));
        return empty($data)?$this->getCategory():$data;
    }
}
