<?php
include_once "./SubSystemOne.php";
include_once "./SubSystemTwo.php";
include_once "./SubSystemThree.php";
include_once "./SubSystemFourth.php";

class Facade{

    private $systemOne;
    private $systemTwo;
    private $systemThree;
    private $systemFourth;

    public function __construct()
    {
        $this->systemOne = new SubSystemOne();
        $this->systemTwo = new SubSystemTwo();
        $this->systemThree = new SubSystemThree();
        $this->systemFourth = new SubSystemFourth();
    }

    public function methodA(){
        echo "方法a\n";
        $this->systemOne->methodOne();
        $this->systemThree->methodThree();
    }

    public function methodB(){

        echo "方法b\n";
        $this->systemTwo->methodTwo();
        $this->systemFourth->methodFourth();
    }
}