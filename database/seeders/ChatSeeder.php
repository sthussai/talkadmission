<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create([
            'from_userid' => '3',
            'to_userid' => '1'
        ]);
        Chat::create([
            'from_userid' => '3',
            'to_userid' => '2'
        ]);
        Chat::create([
            'from_userid' => '1',
            'to_userid' => '2'
        ]);
        Chat::create([
            'from_userid' => '1',
            'to_userid' => '3'
        ]);
    }
}
