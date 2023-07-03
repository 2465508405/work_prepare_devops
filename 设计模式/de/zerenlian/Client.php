<?php

include_once("./ConcreteHandler1.php");
include_once("./ConcreteHandler2.php");
include_once("./ConcreteHandler3.php");

class Client {


    public function index(){

        $concret1 = new ConcreteHandler1();
        $concret2 = new ConcreteHandler2();
        $concret3 = new ConcreteHandler3();
        $concret1->setSuccessor($concret2);
        $concret2->setSuccessor($concret3);
        $concret1->handleRequest(30);
    }
}

$cli = new Client();

$cli->index();