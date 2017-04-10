<?php
namespace Api\Controller;
use Think\Controller\RestController;
class BaseController extends RestController {
    private $errors = [
        "404"=>["status"=>404,"code"=>"404","message"=>"page not found","dev_info"=>"page not found","more_info"=>""],
        "10001"=>["status"=>200,"code"=>"10001","message"=>"数据输入错误","dev_info"=>"客户端参数错误","more_info"=>""],
        "10002"=>["status"=>200,"code"=>"10002","message"=>"服务器错误","dev_info"=>"数据库操作错误","more_info"=>""],
        "10003"=>["status"=>200,"code"=>"10003","message"=>"用户信息已存在","dev_info"=>"数据库记录重复","more_info"=>""],
        "10004"=>["status"=>200,"code"=>"10004","message"=>"用户信息不存在","dev_info"=>"数据库记录不存在","more_info"=>""],
        // "10005"=>["status"=>200,"code"=>"10005","message"=>"用户信息不存在或密码不正确","dev_info"=>"密码不正确","more_info"=>""],
        "10006"=>["status"=>200,"code"=>"10006","message"=>"用户信息不存在或密码不正确","dev_info"=>"数据库记录不存在或密码不正确","more_info"=>""],
        "10007"=>["status"=>200,"code"=>"10007","message"=>"用户信息不存在或数据未改变","dev_info"=>"数据库记录不存在或数据未改变","more_info"=>""],
        "10008"=>["status"=>200,"code"=>"10008","message"=>"用户信息不正确","dev_info"=>"Session信息不正确","more_info"=>""],
        "10009"=>["status"=>200,"code"=>"10009","message"=>"服务器错误","dev_info"=>"打开文件出错","more_info"=>""],
        "10010"=>["status"=>200,"code"=>"10010","message"=>"服务器错误","dev_info"=>"写文件出错","more_info"=>""],
        "10011"=>["status"=>200,"code"=>"10011","message"=>"服务器错误","dev_info"=>"操作系统错误","more_info"=>""],
        "10012"=>["status"=>200,"code"=>"10012","message"=>"登录已过期","dev_info"=>"验证token过期","more_info"=>""],
        "10013"=>["status"=>403,"code"=>"10013","message"=>"没有权限","dev_info"=>"没有操作权限","more_info"=>""],
        "10014"=>["status"=>200,"code"=>"10014","message"=>"短信发送失败","dev_info"=>"超过一天发送限制或短信服务出现问题","more_info"=>""],
        "10015"=>["status"=>200,"code"=>"10015","message"=>"验证失败","dev_info"=>"验证码错误","more_info"=>""],
        "10016"=>["status"=>401,"code"=>"10016","message"=>"需要登录","dev_info"=>"未进行身份认证","more_info"=>""],
    ];
    protected function retData($data=[]){
        $this->response(["data"=>$data],"json");
    }
    protected function retError($code,$moreInfo){
        $error = $this->errors[$code];
        $error["more_info"] = $moreInfo;
        $this->response(["error"=>$error],"json",$error["status"]);
    }

}