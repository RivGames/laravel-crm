<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function status()
    {
        return response()->json([
            'message' => 'Everything is going to be OK',
            'status' => 'OK'
        ]);
    }
}
