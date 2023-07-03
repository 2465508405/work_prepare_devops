<?php

include_once "./Player.php";
class Forwards extends Player{


    public function attack()
    {
        // TODO: Implement attack() method.
        echo "前锋".$this->name."进攻\n";
    }

    public function defense()
    {
        // TODO: Implement defense() method.

        echo "前锋防守".$this->name."防守\n";
    }
}