<?php

include_once "./Player.php";
class Center extends Player{

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function attack()
    {
        // TODO: Implement attack() method.
        echo "中锋".$this->name."进攻\n";
    }

    public function defense()
    {
        // TODO: Implement defense() method.
        echo "中锋".$this->name."防守\n";
    }
}