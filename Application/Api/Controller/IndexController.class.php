<?php
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($name="baby"){
        echo "Hello".$name;
    }

}