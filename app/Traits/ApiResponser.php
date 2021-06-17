<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Build success response
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }

    /**
     * Build error response
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($data, $code)
    {
        return response()->json(['error' => $data], $code);
    }
}
