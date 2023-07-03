<?php

include_once "./Work.php";

class Client {


    public function index(){

        $w = new Work();
        $w->setHour(73);
        $w->setTaskFinished(0);
        $fore = new ForenoonState();
        $w->setState($fore);
        $w->setTaskFinished(1);
        $w->writeProgram();
    }
}

$cli = new Client();
$cli->index();