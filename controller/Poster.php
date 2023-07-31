<?php

include_once "DB.php";

class Poster extends DB{
    function __construct()
    {
        parent::__construct('posters');
    }

    function backend(){
        $view=[
            "rows"=>$this->all(),
        ];

        $this->view("./view/backend/poster.php",$view);
    }
}