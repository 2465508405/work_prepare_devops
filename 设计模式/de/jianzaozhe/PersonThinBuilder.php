<?php

include_once("./PersonBuilder.php");
class PersonThinBuilder extends PersonBuilder{


    public function BuildHead()
    {
        echo "小头";
    }

    public function BuildBody(){
        echo "小身子\n";
    }

    public function BuildArmLeft()
    {
        echo "左臂\n";
    }

    public function BuildArmRight(){

        echo "右臂\n";
    }

    public function BuildLegLeft()
    {
        // TODO: Implement BuildLegLeft() method.
        echo "左腿\n";
    }

    public function BuildLegRight()
    {
        // TODO: Implement BuildLegRight() method.
        echo "右腿\n";
    }
}