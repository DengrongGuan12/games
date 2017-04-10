<?php
namespace Api\Controller;
class CourseController extends BaseController{
    public function get($offset=0,$limit=10){
        $this->retData(D("course")->selectCourses());
    }
}