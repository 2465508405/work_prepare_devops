<?php

include_once "./Action.php";
abstract class Person{


    abstract public function accept(Action $visitor);
}