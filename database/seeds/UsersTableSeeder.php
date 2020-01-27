<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin  = User::create([
            'name'=>'Admin User',
            'phone'=> '0123456789',
            'email'=> 'admin@admin.com',
            'password'=> Hash::make('password')
        ]);

        $manager  = User::create([
            'name'=>'Manager User',
            'phone'=> '0012345678',
            'email'=> 'manager@admin.com',
            'password'=> Hash::make('password')
        ]);

        $user  = User::create([
            'name'=>'User',
            'phone'=> '0001234567',
            'email'=> 'user@admin.com',
            'password'=> Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
        $user->roles()->attach($userRole);
    }
}
