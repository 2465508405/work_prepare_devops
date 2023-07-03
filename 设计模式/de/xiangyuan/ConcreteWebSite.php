<?php

include_once "./WebSite.php";
include_once "./User.php";
class ConcreteWebSite extends WebSite{


    private $name = '';
    function __construct($name)
    {
        $this->name = $name;
    }

    public function using(User $user){

        echo "网站分类:".$this->name."用户：".$user->getName()."\n";
    }
}