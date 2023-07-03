<?php

include_once "./State.php";
include_once "./AfternoonState.php";
class NoonState extends State{


    public function writeProgram(Work $w)
    {
        // TODO: Implement writeProgram() method.

        if($w->getHour() < 13){
            echo "当前时间：".$w->getHour()."饿了，午饭，犯困，午休\n";
        }else{

            $w->setState(new AfternoonState());
            $w->writeProgram();
        }
    }
}