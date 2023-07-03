<?php

class Woman extends Person{

    public function accept(Action $visitor){

        $visitor->getWomanConcluson($this);
    }
}