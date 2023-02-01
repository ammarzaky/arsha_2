<?php

namespace App\Http\Controllers\api;

trait ApiResponseTrait
{
    public function ApiResponse($data = null, $message = null, $status = null)
    {
        $array = [
            'data' => $data,
            'message' => $message,
            'statuse' => $status
        ];
        return response($array, $status);
    }
}