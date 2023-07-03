<?php


include_once("./IDepartment.php");
class AccessDepartment implements IDepartment{


    public function insert(Department $department){

        echo "insert accessDepartment 一条记录";
    }

    public function getDepartment($id)
    {
        // TODO: Implement getDepartment() method.

        echo "获取accessdepartment 一条记录";
    }

}


