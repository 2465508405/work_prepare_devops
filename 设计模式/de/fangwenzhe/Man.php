<?php


class Man extends Person{


    public function accept(Action $visitor){

        $visitor->getManConcluson($this);
    }

    public function getSalary(){
        echo "薪水3000\n";
    }
}s