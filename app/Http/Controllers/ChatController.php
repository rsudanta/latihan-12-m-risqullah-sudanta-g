<?php

namespace App\Http\Controllers;

use App\Models\HistoryChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    function index()
    {
        $historyChat = HistoryChat::get();
        return view('chat', compact('historyChat'));
    }

    function store(Request $request)
    {
        $input = $request['chat'];
        $url = env('GEMINI_API_BASE_URL') . env('GEMINI_API_KEY');

        $payload = [
            "contents" => [
                [
                    "parts" => [
                        [
                            "text" => $input
                        ]
                    ]
                ]
            ]
        ];


        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($url, $payload);

        $chatbotResponse = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No Response';

        HistoryChat::insert([
            "send_chat" => $input,
            "get_chat" => $chatbotResponse,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return redirect()->back();
    }
}
