<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * HealthCheck
     *
     * @unauthenticated
     * @return \Illuminate\Http\JsonResponse
     * <aside class="notice">We mean it; you really should.</aside>
     */
    public function status()
    {
        return response()->json([
            'message' => 'Everything is going to be OK',
            'status' => 'OK',
        ]);
    }
}
