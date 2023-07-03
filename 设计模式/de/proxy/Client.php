<?php

include_once("./SchoolGirl.php");
include_once("./Proxy.php");
include_once "./Pursuit.php";
class Client{

    public function index(){
        $girl = new SchoolGirl("小花");
        $proxy = new Proxy($girl);
        $proxy->GiveDolls();
        $proxy->GiveChocolate();
        $proxy->GiveFlowers();
        echo "-----\n";
        $p = new Pursuit($girl);
        $p->GiveDolls();
        $p->GiveChocolate();
        $p->GiveFlowers();

    }
}
$cli = new Client();


$cli->index();