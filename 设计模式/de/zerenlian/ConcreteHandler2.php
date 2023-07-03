<?php

class ConcreteHandler2 extends Handler{


    public function handleRequest( $request)
    {
        // TODO: Implement handleRequest() method.

        if($request>= 10 && $request<=20){
            echo "handle2\n";
        }else {
            $this->successor->handleRequest(20);
        }

    }
}