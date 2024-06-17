<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatPolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user, Chat $user_id): bool
    {
        return $user->id === $user_id;   
    }
}