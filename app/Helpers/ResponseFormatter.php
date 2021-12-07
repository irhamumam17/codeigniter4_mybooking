<?php
namespace App\Helpers;

use CodeIgniter\API\ResponseTrait;

class ResponseFormatter{
    use ResponseTrait;
    protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null
        ],
        'data' => null
    ];

    public function success($data = null, $message = null){
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        return self::$response;
    }

    public function error($data = null, $message = null, $code = 400){
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        return self::$response;
    }
}
?>