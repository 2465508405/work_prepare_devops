<?php

include_once("./PersonBuilder.php");
class PersonFatBuilder extends PersonBuilder{



    public function BuildHead()
    {
        // TODO: Implement BuildHead() method.
        echo "大头\n";
    }

    public function BuildBody()
    {
        // TODO: Implement BuildBody() method.
        echo "大身子\n";
    }

    public function BuildArmLeft()
    {
        // TODO: Implement BuildArmLeft() method.
        echo "左臂\n";
    }

    public function BuildArmRight()
    {
        // TODO: Implement BuildArmRight() method.
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