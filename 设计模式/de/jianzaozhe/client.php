<?php

include_once("./PersonDirector.php");
include_once("./PersonFatBuilder.php");
class client {


    public function index(){
        $fatBuild = new PersonFatBuilder();
        $dir = new PersonDirector($fatBuild);

//        echo $fatBuild->BuildBody();
        $dir->createPerson();

    }

}
$cli = new Client();

$cli->index();