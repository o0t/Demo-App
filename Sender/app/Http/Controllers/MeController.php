<?php

namespace App\Http\Controllers;

use App\Models\SenderMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $id = Auth::user()->id;
        // $SenderUser = SenderMessage::with(['User'])->get();
        // // $sender = new SenderMessage();
        // $UserSender = $SenderUser->find($id);
        $DB = DB::table('sender_messages')
        ->select('title', 'type', 'sender_message', 'created_at')
        ->where('user_id','=', $id)
        ->orderByDesc('created_at')
        ->get();
        return view('App.Me',compact('DB'));

    }
}
