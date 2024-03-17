<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        $role_admin = Role::where(['name_role'=>'admin'])->first();
        $admin = new User();
        $admin->name="admin";
        $admin->email="admin@gmail.com";
        $admin->password=Hash::make('linuxlinux');
        $admin->save();
        $admin->roles()->attach($role_admin);
        $role_user = Role::where(['name_role'=>'user'])->first();
        $user = new User();
        $user->name="demo";
        $user->email="demo@gmail.com";
        $user->password=Hash::make('linuxlinux');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
