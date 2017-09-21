<?php namespace Package\Common;


class ApiResponse
{
    public static function success($mixed, $status_code = 200)
    {
        if(!ctype_digit(strval($status_code))) throw new Exception("非法的状态码： {$status_code}");
        return response()
                    ->json([
                        'response_code' => 'success',
                        'response_data' => $mixed,
                        'status_code'   => $status_code,
                    ])
                    ->header("HTTP/1.1 {$status_code}");
    }

    public static function fail($mixed, $status_code = 500)
    {
        if(!ctype_digit(strval($status_code))) throw new Exception("非法的状态码： {$status_code}");
        return response()
                    ->json([
                        'response_code' => 'fail',
                        'response_data' => $mixed,
                        'status_code'   => $status_code,
                    ])
                    ->header("HTTP/1.1 {$status_code}");
    }
}