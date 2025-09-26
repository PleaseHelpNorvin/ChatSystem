<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'from' => 'required|integer',
            'to' => 'required|integer',
        ]);

        // Save message to DB (optional)
        // Message::create([...]);

        broadcast(new MessageSent(
            $request->message,
            $request->from,
            $request->to
        ))->toOthers();

        return response()->json(['status' => 'Message sent!']);
    }
}
