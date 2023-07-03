<?php

include_once("./Iuser.php");
class AccessUser implements IUser{

    public function insert(User $user)
    {
        
        echo "在Access表插入一条user";
    }

    public function getUser($id)
    {

        echo "获取access user记录";
    }
}