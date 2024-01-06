<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Applicant;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Applicant::create([
            'name' => 'Applicant 1',
        ]);
        Applicant::create([
            'name' => 'Applicant 2',
        ]);
    }
}
