<?php
include_once("IUser.php");
include_once("DataBase.php");
include_once("User.php");
include_once("Department.php");
//include_once("DataBase.php");

class Client {

    public function index(){

        $user = new User();
        $user->setId(333);
        $iu = Database::CreateUser();
        $iu->insert($user);
        $iu->getUser(3);
        $department = new Department();
        $id = Database::CreateDepartment();
        $id->insert($department);
        $id->getDepartment(23);
    }
}

$client = new Client();

$client->index();