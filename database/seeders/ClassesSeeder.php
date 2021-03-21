<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classes;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::firstOrCreate(
            ['id' => 1],
            [
                'class'         => ' 12 RPL 1',
                'sie_rohani'    => 'M Hapidh ',
                'nis'           => '1806510123',
                'contact'       => 'mhapidh@gmail.com',
                'teacher_id'    => 1
            ]
        );
        Classes::firstOrCreate(
            ['id' => 2],
            [
                'class'         => ' 12 RPL 2',
                'sie_rohani'    => 'M Nipan',
                'nis'           => '1806510124',
                'contact'       => 'mnipan@gmail.com',
                'teacher_id'    => 1
            ]
        );
        Classes::firstOrCreate(
            ['id' => 3],
            [
                'class'         => ' 12 RPL 3',
                'sie_rohani'    => 'Lolla Mariah',
                'nis'           => '1806510125',
                'contact'       => 'lolla@gmail.com',
                'teacher_id'    => 2
            ]
        );
    }
}
