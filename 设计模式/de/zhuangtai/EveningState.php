<?php


include_once "./State.php";
include_once "./RestState.php";
include_once "./SleepState.php";
class EveningState extends State{

    public function writeProgram(Work $w)
    {
        // TODO: Implement writeProgram() method.
        if($w->getTaskFinishedState()){

            $w->setState(new RestState());
            $w->writeProgram();

        }else{
            if($w->getHour() < 21){
                echo "当前时间：".$w->getHour()." 加班\n";
            }else{
                $w->setState(new SleepState());
                $w->writeProgram();
            }
        }
    }
}