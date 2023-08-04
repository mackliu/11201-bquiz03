<style>
    .movie{
        display:flex;
        align-items: center;
        min-height:100px;
        background-color: white;
        color:black;
        margin:3px 0;
        padding:2px;
    }
    .col:nth-child(1),
    .col:nth-child(2){
        width:15%;
    }
    .col:nth-child(3){
        flex-grow:1;
        /* width:70%; */
    }
    .row:nth-child(1){
        display:flex;
        justify-content: space-between;
    }
</style>
<button>新增電影</button>
<hr>
<div style="overflow:auto;height:450px">
<?php
foreach($rows as $idx=> $row){
    $prev=($idx==0)?$row['id']:$rows[$idx-1]['id'];
    $next=($idx==array_key_last($rows))?$row['id']:$rows[$idx+1]['id'];    
?>
<div class="movie">
    <div class="col">
        <img src="./upload/<?=$row['poster'];?>" style="width:80px;height:110px;">
    </div>
    <div class="col">
        分級: <img src="./icon/03C0<?=$row['level'];?>.png" style="width:25px;height:25px">
    </div>
    <div class="col">
        <div class="row">
            <div class="info">片名:<?=$row['name'];?></div>
            <div class="info">片長:<?=$row['length'];?></div>
            <div class="info">上映時間:<?=$row['ondate'];?></div>
        </div>
        <div class="row">
            <button class="show" data-id="<?=$row['id'];?>">顯示</button>
            <button class="sw" data-sw="<?=$row['id'];?>-<?=$prev;?>">往上</button>
            <button class="sw" data-sw="<?=$row['id'];?>-<?=$next;?>">往下</button>
            <button class="edit" data-id="<?=$row['id'];?>">編輯電影</button>
            <button class="del" data-id="<?=$row['id'];?>">刪除電影</button>
        </div>
        <div class="row">
            劇情介紹:<?=$row['intro'];?>
        </div>
    </div>
</div>
<?php
}
?>

</div>
<script>
$(".sw").on("click",function(){
    let id=$(this).data('sw').split("-")
    $.post("./api/sw.php",{table:'Movie',id},(res)=>{
    
        location.reload();
    })
})
</script>
