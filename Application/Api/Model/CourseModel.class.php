<?php
namespace Api\Model;
use Think\Model;
class CourseModel extends Model{
    // protected $tableName = "course";
    public function selectCourses(){
        return $this->find(1);
    }
}