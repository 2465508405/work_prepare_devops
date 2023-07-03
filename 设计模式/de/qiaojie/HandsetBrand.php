<?php


include_once "./HandsetSoft.php";
abstract class HandsetBrand{

    protected $soft;

    public function setHandSoft(HandsetSoft $soft){

        $this->soft = $soft;
    }

    abstract public function run();
}