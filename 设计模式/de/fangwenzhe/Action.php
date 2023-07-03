<?php

include_once "./Man.php";
include_once "./Woman.php";

abstract class Action{

    abstract public function getManConcluson(Man $concreteElementA);
    abstract public function getWomanConcluson(Woman $concreteElementB);
}