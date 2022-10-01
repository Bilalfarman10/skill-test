<?php

use Illuminate\Support\Facades\Response;

if (!function_exists('defaultPerPage')) {
    /**
     * Default pagination per page listing products limit.
     *
     * @param int $perPage
     * @return int per page listing products
     */
    function defaultPerPage($perPage)
    {
        return (int) $perPage ? (int) $perPage : 15;
    }
}

if (!function_exists('apiResponse')) {
    /**
     * Error response.
     */
    function apiResponse($success = null, $errors = [], $data = null, $code = null)
    {
        return Response::json(
            [
                'success' => $success,
                'errors' => $errors,
                'data' => $data,
            ],
            (int) $code,
            [
                'Content-Type' => 'application/json',
            ]
        );
    }
}
