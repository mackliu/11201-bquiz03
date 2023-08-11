<?php
include_once "../base.php";
?>
<style>
.theater *,
.info *{
    box-sizing: border-box;
}
.theater{
    width:540px;
    height:370px;
    background-image:url("../icon/03D04.png");
    background-position: center;
    background-repeat: no-repeat;
    margin: auto;
}
.info{
    width:540px;
    min-height:100px;
    background:#ccc;
    margin:auto;
    padding:5px 10%;
}
.seats{
    width:315px;
    height:340px;
    margin:auto;
    display:flex;
    flex-wrap:wrap;
    padding-top:18px;
}
.seat{
    width:63px;
    height:85px;
    text-align: center;
}
</style>
<div class="theater">
    <div class="seats">
        <div class="seat">X排X號</div>
    </div>
</div>
<div class="info">

    <div>您選擇的電影是:<?=$_GET['movie'];?></div>
    <div>您選擇的時刻是:<?=$_GET['date'];?> <?=$_GET['session'];?></div>
    <div>您已經<span id='tickets'></span>勾選張票，最多可以購買四張票</div>
    <div class="ct">
        <button onclick="$('#form,#booking').toggle()">上一步</button>  
        <button>訂購</button>
    </div>
</div>
