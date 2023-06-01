<?php

namespace LaravelTool\Liveness\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class PingController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return response()->json();
    }
}
