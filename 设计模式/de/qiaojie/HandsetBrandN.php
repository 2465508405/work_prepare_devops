<?php

include_once "./HandsetBrand.php";

class HandsetBrandN extends HandsetBrand{

    public function run()
    {
        return $this->soft->run();
    }

}