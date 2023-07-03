<?php

include_once "./Facade.php";
class Client {


    public function index(){


        $facade = new Facade();
        $facade->methodA();
        $facade->methodB();
    }

}
$cli = new Client();
$cli->index();