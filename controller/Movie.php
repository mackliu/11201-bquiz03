<?php 

include_once "DB.php";

class Movie extends DB{

    function __construct()
    {
        parent::__construct('movies');
    }

    function backend(){
        $view=["rows"=>$this->all(" order by `rank`")];

        return $this->view("./view/backend/movie.php",$view);
    }

    function movies(){
        $today=date("Y-m-d");
        $ondate=date("Y-m-d",strtotime("-2 days"));
        $rows=$this->paginate(4, " where `sh`=1 AND `ondate` between '$ondate' and '$today' order by `rank`");
        
        return $rows;
    }
}