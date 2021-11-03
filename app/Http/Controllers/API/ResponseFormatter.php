<?php

namespace App\Http\Controllers\API;

class ResponseFormatter {

    protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null
        ],
        'data' => null
    ];

    public static function success ($data = null, $message = null) {
        // menyimpan message kedalam variabel yang ada di protected static
        self::$response['meta']['message'] = $message;
        
        // menyimpan data kedalam variabel yang ada di protected static
        self::$response['data'] = $data;

        //helper meng-outputkan json
        return response()->json(self::$response, self::$response['meta']['code']);
    }
     public static function error ($data = null, $message = null, $code = 400) {
         
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        //helper meng-outputkan json
        return response()->json(self::$response, self::$response['meta']['code']);
    }

}