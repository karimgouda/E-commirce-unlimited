<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'name'=>'admin',
           'email'=>'admin@gmail.com',
           'address'=>'cairo',
           'phone'=>'01025660964',
           'role'=>'admin',
           'active'=>1,
           'password'=>bcrypt('1234')
        ]);

        $this->command->comment('======== Information Groups created ========');
    }
}
