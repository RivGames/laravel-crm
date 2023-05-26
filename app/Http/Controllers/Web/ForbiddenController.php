<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Exceptions\HttpResponseException;

class ForbiddenController extends Controller
{
    public function __invoke()
    {
        throw new HttpResponseException(
            response()->json([
                'message' => 'Forbidden',
            ], 403)
        );
    }
}
