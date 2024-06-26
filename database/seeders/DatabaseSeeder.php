<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

    $this->call(UsersTableSeeder::class);   
    $this->call(ApplicantSeeder::class);   
$this->call(MentorSeeder::class);   
        $this->call(PortfolioSeeder::class);   
      $this->call(ChatSeeder::class);   
        $this->call(MessageSeeder::class);   

    }
}
