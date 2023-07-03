<?php

include_once("./ConcreteColleague1.php");
include_once("./ConcreteMediator.php");
class Client {

    //
    public function index(){

        $mediator = new ConcreteMediator();
        $colleague1 = new ConcreteColleague1($mediator);
        $mediator->setColleague1($colleague1);
        $colleague1->send("col1");
    }
}

$cli = new Client();

$cli->index();