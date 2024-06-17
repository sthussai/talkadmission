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
            'user_id' => '3',
            'to_user' => '1'
        ]);
        Chat::create([
            'user_id' => '3',
            'to_user' => '2'
        ]);
        Chat::create([
            'user_id' => '1',
            'to_user' => '2'
        ]);
        Chat::create([
            'user_id' => '1',
            'to_user' => '3'
        ]);
    }
}
