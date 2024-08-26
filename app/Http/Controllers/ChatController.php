<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    function handleChat(Request $request)
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

        return redirect()->back()->with(['response' => $chatbotResponse, 'input' => $input]);
    }
}
