<?php

include_once "./Player.php";
include_once "./ForeignCenter.php";
class Translator extends Player{

    private $foreignCenter;

    function __construct($name)
    {
        $this->foreignCenter = new ForeignCenter();
        $this->foreignCenter->setName($name);
    }

    public function attack()
    {
        // TODO: Implement attack() method.
        $this->foreignCenter->jingong();
    }

    public function defense()
    {
        // TODO: Implement defense() method.
        $this->foreignCenter->fangshou();
    }
}