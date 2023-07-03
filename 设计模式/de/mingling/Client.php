<?php

include_once("./Barbecuer.php");
include_once("./BakeChichenWingCommand.php");
include_once("./BakeMuttonCommand.php");
include_once("./Waiter.php");
class Client {


    function index(){

        $bar = new Barbecuer();
        $mutton = new BakeMuttonCommand($bar);
        $mutton1 = new BakeMuttonCommand($bar);
        $wing = new BakeChichenWingCommand($bar);
        $waiter = new Waiter();
        $waiter->setOrder($mutton);
        $waiter->setOrder($mutton1);
        $waiter->setOrder($wing);
        $waiter->notify();
    }
}

$cli = new Client();

$cli->index();