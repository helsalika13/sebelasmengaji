<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            ['id' => 1],
            [
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('superadmin'),
                'role' => 'superadmin'
            ]
        );
        User::firstOrCreate(
            ['id' => 2],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ]
        );
        User::firstOrCreate(
            ['id' => 3],
            [
                'name' => 'SRohani',
                'username' => 'srohani',
                'email' => 'srohani@gmail.com',
                'password' => Hash::make('srohani'),
                'role' => 'srohani'
            ]
        );
    }
}
