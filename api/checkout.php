<?php
include_once "../base.php";
sort($_POST['seats']);
$_POST['qt']=count($_POST['seats']);

$max_id=$Order->max('id')+1;
$_POST['no']=date("Ymd") . sprintf("%04d",$max_id);
$_POST['seats']=serialize($_POST['seats']);
$Order->save($_POST);
echo $_POST['no'];