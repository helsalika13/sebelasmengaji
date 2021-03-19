<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::firstOrCreate(['id' => 1], ['feedback' => 'Sangat Baik']);
        Feedback::firstOrCreate(['id' => 2], ['feedback' => 'Baik']);
        Feedback::firstOrCreate(['id' => 3], ['feedback' => 'Cukup Baik']);
        Feedback::firstOrCreate(['id' => 4], ['feedback' => 'Kurang Baik']);
    }
}
