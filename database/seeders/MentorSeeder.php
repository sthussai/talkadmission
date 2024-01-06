<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mentor;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mentor::create([
            'name' => 'Mentor One',
        ]);
        Mentor::create([
            'name' => 'Mentor Two',
        ]);
    }
}
