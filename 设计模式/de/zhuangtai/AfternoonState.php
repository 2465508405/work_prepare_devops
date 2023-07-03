<?php

include_once "./State.php";
include_once "./EveningState.php";
class AfternoonState extends State{


    public function writeProgram(Work $w)
    {
        // TODO: Implement writeProgram() method.
        if($w->getHour() < 17){

            echo "当前时间：".$w->getHour()."精神饱满\n";
        }else{

            $w->setState(new EveningState());
            $w->writeProgram();
        }
    }
}