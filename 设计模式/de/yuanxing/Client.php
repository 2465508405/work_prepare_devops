<?php

include_once("./Resume.php");
class Client{


    public function index(){
        $resume = new Resume("大鸟");
        $resume->setPersonalInfo("男", 29);
        $resume->setWorkExperience("1990-2000","x1 公司");
        $resume->setInfo("aa");
        $resume2 = clone $resume;
        $resume2->setPersonalInfo("男", 40);
        $resume2->setWorkExperience("2000-2010","x2 公司");
        $resume2->setInfo("bbb");
        $resume->display();
        $resume2->display();
        $resume3 = clone $resume;
        $resume3->setPersonalInfo("男", 70);
        $resume3->setWorkExperience("2010-2030","x3 公司");
        $resume3->setInfo("ggg");
        $resume3->display();

        echo $resume->company->getName();
        echo $resume2->company->getName();
        echo $resume3->company->getName();
        
    }
}

$cli = new Client();
$cli->index();
