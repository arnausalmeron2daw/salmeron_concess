<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Role();
        $admin->id = '1';
        $admin->name_role = 'admin';
        $admin->save();

        $userRole = new Role();
        $userRole->id = '2';
        $userRole->name_role = 'user';
        $userRole->save();
    }
}
