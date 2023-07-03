<?php

include_once("./ConcreteComponent.php");
include_once "./ConcreteDecoratorA.php";
include_once "./ConcreteDecoratorB.php";
class Client{


    public function index(){

        $component = new ConcreteComponent();
        $deraA = new ConcreteDecoratorA();
        $deraB = new ConcreteDecoratorB();
        $deraA->setComponent($component);
        $deraB->setComponent($deraA);
        $deraA->operation();
        $deraB->operation();
    }
}

$cli = new Client();
$cli->index();