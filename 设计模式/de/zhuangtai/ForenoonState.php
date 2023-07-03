<?php

include_once "./State.php";
include_once "./Work.php";
include_once "./NoonState.php";
class ForenoonState extends State{

    public function writeProgram(Work $w)
    {
        // TODO: Implement WriteProgram() method.

        if($w->getHour() < 12){

            echo "当前时间：".$w->getHour()."上午工作，精神百倍\n";
        }else {

            $w->setState(new NoonState());
            $w->writeProgram();
        }
    }
}