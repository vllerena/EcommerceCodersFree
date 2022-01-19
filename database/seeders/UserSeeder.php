<?php

namespace Database\Seeders;

use App\Models\Info\UserAttr;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $role = Role::create(['name' => 'admin']);

        User::create([
            UserAttr::NAME => 'Victor Llerena',
            UserAttr::EMAIL => 'victor@gmail.com',
            UserAttr::PASSWORD => Hash::make('victor123'),
        ])->assignRole('admin');
    }
}
