<?php
include_once "./ConcreteStrategyA.php";
include_once "./ConcreteStrategyB.php";
include_once "./ConcreteStrategyC.php";
include_once "./Context.php";
class Client{

    public function index(){

        $cA = new Context("+");
        $cB = new Context("-");
        $cC = new Context("*");
        $cA->contextInterface();
        $cB->contextInterface();
        $cC->contextInterface();
    }
}
$cli = new Client();
$cli->index();