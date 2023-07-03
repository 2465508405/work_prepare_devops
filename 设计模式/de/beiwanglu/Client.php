<?php

//include_once "./Memento.php";
include_once "./Originator.php";
include_once "./CareTaker.php";
class Client {


    public function index(){


        $ori = new Originator();
        $ori->setState(2);
//        $memento = new Memento($ori->getState());
        $care = new CareTaker();
        $care->setMemento($ori->createMemento());
        $ori->show();
        $ori->setState(3);
        $ori->show();
        $ori->setMemento($care->getMemento());
        $ori->show();
    }

}
$cli = new Client();
$cli->index();