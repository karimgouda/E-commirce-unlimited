<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
           'phone'=>'+201025660964',
           'email'=>'dev.karimgouda@gmail.com',
           'address'=>'Egypt , Mansoura',
           'desc'=>[
               'en','text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
               'ar','نص منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع واندفعته لعمل كتاب عينة من النوع. لقد صمد ليس فقط لخمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظل دون تغيير جوهري. تم نشره في الستينيات من القرن الماضي مع إصدار أوراق  التي تحتوي على مقاطع Lorem  ، ومؤخرًا مع برامج النشر المكتبي مثل   بما في ذلك إصدارات.'
           ],
        ]);
    }
}
