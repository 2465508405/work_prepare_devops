<?php

//include_once "./Memento.php";
include_once "./ObjectStructure.php";
include_once "./Man.php";
include_once "./Woman.php";
include_once "./Success.php";
include_once "./Failing.php";
include_once "./Amativeness.php";
class Client {

    public function index(){

        $struct = new ObjectStructure();
        $struct->attach(new Man());
        $struct->attach(new Woman());
        $sucVistor = new Success();
        $struct->display($sucVistor);

        $failVistor = new Failing();
        $struct->display($failVistor);
        $amativeVistor = new Amativeness();

        $struct->display($amativeVistor);
    }

}
$cli = new Client();
$cli->index();