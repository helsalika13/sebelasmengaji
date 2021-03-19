<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::firstOrCreate(
            ['id' => 1],
            [
                'nip' => '00123456789',
                'name' => 'Titin S.Pd',
                'address' => 'Jl. Padalarang no.101',
                'contact' => 'titin@gmail.com'
            ]
        );
        Teacher::firstOrCreate(
            ['id' => 2],
            [
                'nip' => '00987654321',
                'name' => 'Usman S.Pd',
                'address' => 'Jl. Budhi no.102',
                'contact' => 'usman@gmail.com'
            ]
        );
    }
}
