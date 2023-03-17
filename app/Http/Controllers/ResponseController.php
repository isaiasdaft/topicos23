<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function sendResponse($request, $message){
        $response = [
            'success' => true,
            'data' => $request,
            'message' => $message,
            
        ];

        return response()->json($request, 200);

    }

    public function sendError($error, $errorMessages = [],
    $code = 404){
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }
    }
}
