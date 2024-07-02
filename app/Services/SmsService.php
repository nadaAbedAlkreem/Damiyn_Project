<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.textbelt.api_key');
    }

    public function sendSms($phoneNumber, $message)
    {
        $response = Http::post('https://textbelt.com/text', [
            'phone' => $phoneNumber,
            'message' => $message,
            'key' => $this->apiKey,
        ]);

        return $response->json();
    }
}
