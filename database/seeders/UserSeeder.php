<?php

namespace Database\Seeders;

use App\Models\Info\UserAttr;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            UserAttr::NAME => 'Victor Llerena',
            UserAttr::EMAIL => 'victor@gmail.com',
            UserAttr::PASSWORD => Hash::make('victor123'),
        ]);
    }
}
