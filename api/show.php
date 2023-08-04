<?php include_once "../base.php";

$id=$_POST['id'];
$row=$Movie->find($id);

$row['sh']=($row['sh']+1)%2;

//$row['sh']=($row['sh']==1)?0:1;
/* if($row['sh']==1){
    $row['sh']=0;
}else{
    $row['sh']==1;
} */

$Movie->save($row);