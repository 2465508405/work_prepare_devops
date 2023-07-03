<?php

include_once("./IUser.php");

class SqlServerUser implements IUser{

    public function insert(User $user){

        echo "insert info to user:".$user->getId();
    }

    public function getUser($id)
    {
        
        echo "返回user id";
    }

}