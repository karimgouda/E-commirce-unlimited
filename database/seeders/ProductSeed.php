<?php

namespace Database\Seeders;

use App\Http\Traits\ImageTrait;
use App\Models\Admin\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    use ImageTrait;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for ($i = 0 ; $i<30;$i++){
           Product::create(
               [
                   'name'=>['en'=> fake()->name , 'ar'=>fake()->name],
                   'price'=> fake()->randomElement(['150','270','200','300','450']),
                   'count'=> fake()->randomElement(['20','25','10','40']),
                   'category_id'=>fake()->randomElement([2,23,24,25,26,27,28,29,30,31]),
                   'desc'=>fake()->text,
                   'image'=>''
               ]
           );

       }
    }
}
