<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param string $message Error message
     * @return JSON Response
     */
    public function customValidationErrorResponse($errors = null, $message)
    {
        return response()->json([
            "status" => "error",
            "errors" => $errors,
            "message" => $message
        ], 422);
    }

    /**
     * @param mixed $data Array or Object related
     * @param string $message Success message
     *
     * @return JSON Response
     */
    public function successResponse($data, $message)
    {
        return response()->json([
            "status" => "success",
            "data" => $data,
            "message" => $message
        ], 200);
    }
}
