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
        $chats = Chat::where('from_userid', auth()->user()->id)->orWhere('to_userid', auth()->user()->id)->get();
        $chats = $chats->map(function ($chat) {
            $from_user = User::find($chat->from_userid); // Retrieve the user using from_user
            $chat->from_username = $from_user->name; // Add the username property
            $to_user = User::find($chat->to_userid); // Retrieve the user using to_user
            $chat->to_username = $to_user->name; // Add the username property
                if(auth()->user()->name == $chat->from_username){
                $chat->from_username = 'You'; // Add the username property
                return $chat;
            }
            if(auth()->user()->name == $chat->to_username){
                $chat->to_username = 'You'; // Add the username property
                return $chat;          
            } 
                       
            });
 
        return view("inbox.index", compact('chats'));
    }

    public function show(Request $request){
        if(Auth()->user()->id !=$request->id){
            abort(401);
        }
        $Chat = Chat::where('id', $request->chatId)->first();
        $from_user = User::find($Chat->from_userid); // Retrieve the user using from_user
        $Chat->from_username = $from_user->name; // Add the username property
        $to_user = User::find($Chat->to_userid); // Retrieve the user using to_user
        $Chat->to_username = $to_user->name; // Add the username property
            if(auth()->user()->name == $Chat->from_username){
            $Chat->from_username = 'You'; // Add the username property
        }
        if(auth()->user()->name == $Chat->to_username){
            $Chat->to_username = 'You'; // Add the username property
        } 
        $messages = Message::where('chat_id', $request->chatId)->get();
        
        $chats = Chat::where('from_userid', auth()->user()->id)->orWhere('to_userid', auth()->user()->id)->get(); 
        $chats = $chats->map(function ($chat) {
            $from_user = User::find($chat->from_userid); // Retrieve the user using from_user
            $chat->from_username = $from_user->name; // Add the username property
            $to_user = User::find($chat->to_userid); // Retrieve the user using to_user
            $chat->to_username = $to_user->name; // Add the username property
                if(auth()->user()->name == $chat->from_username){
                $chat->from_username = 'You'; // Add the username property
                return $chat;
            }
            if(auth()->user()->name == $chat->to_username){
                $chat->to_username = 'You'; // Add the username property
                return $chat;          
            } 
                       
            });
      
//        $user = auth()->user();

        return view("inbox.show", compact('chats', 'messages', 'Chat'));
    }
}
