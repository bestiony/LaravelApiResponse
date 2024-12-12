<?php

namespace Bestiony\LaravelApiResponse\Traits;

use Illuminate\Http\JsonResponse;

trait HasApiResponse
{
    public function success($data = [], $message = '', $code = 200, $paginator = null): JsonResponse
    {
        $responseData = [
            'status' => true,
            'code' => $code,
            'message' => $message,
            'data' => $data
        ];

        if ($paginator) {
            $responseData = array_merge($responseData, $paginator->toArray());
        }


        return response()->json($responseData, $code);
    }

    public function error($data = [], $message = '', $code = 400): JsonResponse
    {
        return response()->json([
            'status' => false,
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ], $code);
    }
}
