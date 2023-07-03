<?php

include_once("./IDepartment.php");
class SqlServerDepartment implements IDepartment{

    public function insert(Department $department)
    {

        echo "插入 sqlserver department 一条记录";
    }

    public function getDepartment($id)
    {
        echo "获取department重的一条记录";
    }
}