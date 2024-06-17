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
    public function index(Request $request){
        if(Auth()->user()->id !=$request->id){
            abort(401);
        }
        $user = Auth()->user();
        $chats = Chat::where('user_id', $user->id)->get();
        $chats = $chats->map(function ($chat) {
            $user = User::find($chat->to_user); // Retrieve the user
            $chat->to_username = $user->name; // Add the username property
            return $chat;
        });
        $chatIds = $chats->pluck('id');
        $messages = Message::whereIn('chat_id', $chatIds)->get();
        $messagesByChatId = $messages->groupBy('chat_id');
        $to_users_ids = $chats->pluck('to_user');
        $to_users = User::whereIn('id', $to_users_ids )->get();
        return view("inbox.index", compact('user','to_users','chats', 'messagesByChatId', 'messages'));
    }
    public function show(Request $request){
        if(Auth()->user()->id !=$request->id){
            abort(401);
        }
        $chatId = $request->chatId;
        $user = Auth()->user();
        $Chat = Chat::where('id', $chatId)->first();
        $to_user = User::find($Chat->to_user); // Retrieve the user
        $Chat->to_username = $to_user->name; // Add the username property
        //dd($chat->to_username);

        $chats = Chat::where('user_id', $user->id)->get();
        $chats = $chats->map(function ($chat) {
            $user = User::find($chat->to_user); // Retrieve the user
            $chat->to_username = $user->name; // Add the username property
            return $chat;
        });
        $chatIds = $chats->pluck('id');
        $messages = Message::where('chat_id', $chatId)->get();
        $to_users_ids = $chats->pluck('to_user');
        $to_users = User::whereIn('id', $to_users_ids )->get();
        return view("inbox.show", compact('user','to_users','chats','chatId', 'messages', 'Chat'));
    }
}
