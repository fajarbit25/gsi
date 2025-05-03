<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function service(Request $request)
    {
        // Menangkap nilai Authorization dari header
        $auth = $request->header('Authorization');

        // Memeriksa apakah token yang dikirim sesuai dengan yang diharapkan
        if ($auth !== 'public_globalSurvindo') {
            // Jika token tidak valid, kembalikan error
            return response()->json([
                'error' => 'Unauthorized',
                'message' => 'Invalid Authorization token'
            ], 401); // Status 401 berarti Unauthorized
        }

        //jika token valid, lanjut eksekusi
        return response()->json([
            'status'    => 200,
            'ok'        => true,
            'data'      => Service::find($request->id),
        ], 200);
    }
}
