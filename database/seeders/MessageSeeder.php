<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create([
            'from_user' => '3',
            'to_user' => '1',
            'chat_id' => '1',
            'content' => 'Hello, can we meet?',
        ]);
        Message::create([
            'from_user' => '3',
            'to_user' => '1',
            'chat_id' => '1',
            'content' => 'if so, when?',
        ]);
        Message::create([
            'from_user' => '3',
            'to_user' => '2',
            'chat_id' => '2',
            'content' => 'Hey!',
        ]);
        Message::create([
            'from_user' => '3',
            'to_user' => '2',
            'chat_id' => '2',
            'content' => 'you ready?',
        ]);
        Message::create([
            'from_user' => '1',
            'to_user' => '3',
            'chat_id' => '1',
            'content' => 'yes sure',
        ]);
        Message::create([
            'from_user' => '1',
            'to_user' => '3',
            'chat_id' => '1',
            'content' => 'tomorrow at lunch',
        ]);
    }
}
