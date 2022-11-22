<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

use function GuzzleHttp\Promise\all;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
}
