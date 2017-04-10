<?php
namespace Api\Controller;
class IndexController extends BaseController {
    public function index($name="baby"){
        echo "Hello".$name;
    }
    //正常的格式:{"data":...}
    //错误的格式:{"error":{"code":错误码,"message":错误信息,"status":http状态码,"dev_info":开发人员看的信息,"more_info":额外的信息}}
    public function get(){
        // $this->retData(["list"=>[1,2,3,4,5]]);
        $this->retError("10003","我是谁");
    }
    

}