<?php

include_once("./AddFactory.php");
include_once("./SubFactory.php");
class Client {

    public function index(){
        $fac = new AddFactory();
        $operation = $fac->createOperation();
        $operation->setA(3);
        $operation->setB(9);
        $s = $operation->getResult();
        print_r($s);
        $fac = new SubFactory();
        $operation = $fac->createOperation();
        $operation->setA(3);
        $operation->setB(9);
        $s = $operation->getResult();
        print_r($s);
    }
}

$cli = new Client();
$cli->index();