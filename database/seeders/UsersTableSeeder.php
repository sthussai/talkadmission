<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Applicant One gmail',
            'email' => 'applicant1@gmail.com',
            'usertype' => 'applicant',
            'userable_type' => 'App\Models\Applicant',
            'userable_id' => 1,
            'password' => Hash::make('test1234')
        ]);
        User::create([
            'name' => 'Applicant Two gmail',
            'email' => 'applicant2@gmail.com',
            'usertype' => 'applicant',
            'userable_type' => 'App\Models\Applicant',
            'userable_id' => 2,
            'password' => Hash::make('test1234')
        ]);
        User::create([
            'name' => 'Mentor One',
            'email' => 'mentor1@gmail.com',
            'usertype' => 'mentor',
            'userable_type' => 'App\Models\Mentor',
            'userable_id' => 1,
            'password' => Hash::make('test1234')
        ]);
        User::create([
            'name' => 'Mentor Two',
            'email' => 'mentor2@gmail.com',
            'usertype' => 'mentor',
            'userable_type' => 'App\Models\Mentor',
            'userable_id' => 2,
            'password' => Hash::make('test1234')
        ]);
    }
}
