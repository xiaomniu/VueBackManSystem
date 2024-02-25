<?php

namespace Modules\Admin01\Http\Controllers\v1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Common\Exceptions\ApiException;

use Modules\Admin01\Http\Requests\TestRequest;
use Modules\Common\Exceptions\CodeData;
use Modules\Common\Exceptions\StatusData;
use Modules\Common\Exceptions\MessageData;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public function test(TestRequest $testRequest, $idd){
        // return CodeData::A;
        // echo 'IndexController :: hello world <hr>idd: ';
        // echo $idd.'<hr>';
        // var_dump( $testRequest->all());
        // echo '<hr>'.$testRequest->url().'<hr>';
        // echo $testRequest->fullUrl().'<hr>';

        // return new ApiException(['status'=>60000, 'message' => '服务器错误 是快乐的访客数量大幅']);
        throw new ApiException(['status'=>StatusData::INTERNAL_SERVER_ERROR, 'message' => MessageData::INTERNAL_SERVER_ERROR]);
        return $testRequest->only('body');
    }
    
}
