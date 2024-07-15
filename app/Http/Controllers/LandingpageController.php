<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LandingpageController extends Controller
{
    function getMessage(){
        $chat = Chat::all();
        return response()->json($chat);
    }

    function storeMessage(Request $request){
        try {
            $chat = new Chat();
            $chat->user_id = $request->user_id;
            $chat->message = $request->message;
            $chat->save();
            Log::info(['success']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }
}
