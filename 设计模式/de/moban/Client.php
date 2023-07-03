<?php


include_once "./TestPaperA.php";
include_once "./TestPaperB.php";
class Client{


    public function index(){

        $a = new TestPaperA();
        $a->testQ1();
        $a->testQ2();
        $a = new TestPaperB();
        $a->testQ1();
        $a->testQ2();
    }

}
$cli = new Client();
$cli->index();