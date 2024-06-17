<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'user_id' => '3',
            'name' => 'Mentor One',
            'med_school' => 'Ualberta',
            'year_of_study' => '2nd year',
            'class_of' => '2024',
            'previous_degree' => 'BSc',
            'mmis_attended' => 'Several',
            'mmis_interviewed' => 'Few',
            'mentorship_experience' => 'Formal',
            'applicants_helped' => 'Many',
            'about' => 'Happy to help with your interview prep',
        ]);
        Portfolio::create([
            'user_id' => '4',
            'name' => 'Mentor Two',
            'med_school' => 'UofT',
            'year_of_study' => '1st year',
            'class_of' => '2027',
            'previous_degree' => 'BSc',
            'mmis_attended' => 'Several',
            'mmis_interviewed' => 'Few',
            'mentorship_experience' => 'Formal',
            'applicants_helped' => 'Many',
            'about' => 'Hey, I am a first year med student at UofA. If you have questions about medical school
                            and/or practicing for medical school interviews, feel free to reach out!',
        ]);
    }
}
