<?php

include_once "SqlServerUser.php";
include_once "SqlServerDepartment.php";
class Database{

    const DB = 'SqlServer';
    public static function CreateUser(){

        $class = static::DB.'User';
        return new $class();
    }

    public static function CreateDepartment(){

        $class = static::DB."Department";
        return new $class();
    }
}