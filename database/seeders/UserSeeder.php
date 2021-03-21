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
                'nip_nis' => '',
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
                'nip_nis' => '',
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
                'nip_nis' => '',
                'password' => Hash::make('srohani'),
                'role' => 'srohani'
            ]
        );

        User::firstOrCreate(
            ['id' => 4],
            [
                'name' => 'Titin S.Pd',
                'username' => 'titinspd',
                'email' => 'titin@gmail.com',
                'nip_nis' => '00123456789',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ]
        );
    }
}
