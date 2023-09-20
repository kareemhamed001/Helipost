<?php

namespace App\Traits;

trait ApiResponse
{

    public string $SUCCESS_MESSAGE = 'Success';
    public string $ERROR_MESSAGE = 'Error';

    public int $SUCCESS_CODE = 200;
    public int $SERVER_ERROR_CODE = 500;
    public int $INVALID_PARAMETERS_ERROR_CODE = 400;
    public int $NOT_FOUND_ERROR_CODE = 404;
    public int $UNAUTHORIZED_ERROR_CODE = 401;

    function apiResponse($data, $message, $status)
    {
        return response(['data' => $data, 'message' => $message, 'status' => $status], $status);
    }
}
