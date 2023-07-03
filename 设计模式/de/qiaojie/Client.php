<?php

include_once "./HandsetBrandM.php";
include_once "./HandsetBrandN.php";
include_once "./HandsetAddressList.php";
include_once "./HandsetGame.php";
class Client {

    public function index(){

        $ab = new HandsetBrandN();

        $ab->setHandSoft(new HandsetGame());
        $ab->run();

        $ab->setHandSoft(new HandsetAddressList());
        $ab->run();

        $ab = new HandsetBrandM();
        $ab->setHandSoft(new HandsetGame());
        $ab->run();

        $ab->setHandSoft(new HandsetAddressList());
        $ab->run();
    }
}

$cli = new Client();

$cli->index();