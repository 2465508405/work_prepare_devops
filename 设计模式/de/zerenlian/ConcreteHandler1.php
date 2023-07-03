<?php


include_once("./Handler.php");
class ConcreteHandler1 extends Handler{


    public function handleRequest($request)
    {
        // TODO: Implement handleRequest() method.

        if($request >=0 && $request < 10){
            echo "handle1\n";
        }else{
            $this->successor->handleRequest($request);
        }
    }
}