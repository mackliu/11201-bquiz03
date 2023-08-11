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
}
</style>
<div class="theater"></div>
<div class="info ct">
    <button onclick="$('#form,#booking').toggle()">上一步</button>  
    <button>訂購</button>
</div>
