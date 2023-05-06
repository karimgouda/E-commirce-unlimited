<?php

namespace Database\Seeders;

use App\Http\Traits\ImageTrait;
use App\Models\Admin\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    use ImageTrait;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0 ; $i<20;$i++ ){
            Category::create([
               'name'=>['en'=> fake()->name , 'ar'=>fake()->name],
                'image'=> "",
            ]);
        }
    }
}
