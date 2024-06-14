<?php

namespace App\Http\Controllers;
use App\Models\Chat;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');

    }
    public function index(){
        $user = Auth()->user();
        $to_user = User::find(1);
        $chats = Chat::where('user_id', $user->id)->get();
        $messages = Message::where('from_user', $user->id)->get();
        return view("inbox.index", compact('user','to_user','chats', 'messages'));
    }
}
