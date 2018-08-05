<?php
namespace App\Http\Controllers\Api;
trait ApiResponse{


    /**
     * 'data'=>
     * 'status'=> true or false
     *  'error=>''
     */


    public function apiResponse($data=null,$error=null,$code=200)
    {
        $array=[
            'data'=>$data,
            'status'=>in_array($code,$this->successCode()) ? true :false,
            'error'=>$error
        ];
        return response($array,$code);
    }

    public function successCode()
    {
        return [
            200 , 201 , 202
        ];
    }
    public function notfoundResponse()
    {
        return $this->apiResponse(null,'Not Found',404);
    }
}