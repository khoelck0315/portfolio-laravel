<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TurnstileController extends Controller
{
    public function __invoke(Request $request) {
        $secret = Config::get('services.cloudflare.secretkey');
        $cloudflare_url = "https://challenges.cloudflare.com/turnstile/v0/siteverify";

        $response = Http::post($cloudflare_url, [
            'secret' => $secret,
            'response' => $request->token,
            'remoteip', $_SERVER['REMOTE_ADDR']           
        ]);

        return $response->json();
    }
}
