<?php include_once "../base.php";
switch($_GET['type']){
    case "movie":
        echo $Movie->getMovies();
    break;
    case "date":
       echo $Movie->getDate($_GET['movieId']);
    break;
    case "session":
        //echo $Order->getSession();
    break;
}