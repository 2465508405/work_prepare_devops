<?php

include_once "./ConcreteWebSite.php";
class WebSiteFactory{

    private $flyweights = [];

    public function getWebSiteGategory($key){

        if(empty($this->flyweights[$key])){

            $this->flyweights[$key] = new ConcreteWebSite($key);
        }
        return $this->flyweights[$key];
    }

    public function getWebSiteCount(){

        return count($this->flyweights);
    }
}