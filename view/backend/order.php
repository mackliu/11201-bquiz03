<h3 class="ct">訂單清單</h3>
<div>
快速刪除:
<input type="radio" name="type" value="date">依日期
<input type="text" name="date" id="">
<input type="radio" name="type" value="movie">依電影
<select name="movie" id="">
<?php 
foreach($movies as $movie){
    echo "<option value='{$movie['movie']}'>{$movie['movie']}</option>";
}

?>
</select>
<button onclick="qDel()">刪除</button>

</div>

<style>
    .header,
    .order{
        display:flex;
        justify-content: space-between;
        align-items: center;
    }
    .header div{
        width:calc(100% / 7);
        background-color: #aaa;
        text-align: center;
        margin:0 1px;
    }
    .order div{
        width:calc(100% / 7);
        text-align: center;
        margin:0 1px;
    }
    .order-list{
        overflow:auto;
        height:400px;
    }

</style>
<div class="header">
    <div>訂單編號</div>
    <div>電影名稱</div>
    <div>日期</div>
    <div>場次時間</div>
    <div>訂購數量</div>
    <div>訂購位置</div>
    <div>操作</div>
</div>
<div class="order-list">
    <?php 
    foreach($rows as $row){

    ?>
    <div class="order">
        <div><?=$row['no'];?></div>
        <div><?=$row['movie'];?></div>
        <div><?=$row['date'];?></div>
        <div><?=$row['session'];?></div>
        <div><?=$row['qt'];?></div>
        <div><?php
            $seats=unserialize($row['seats']);
            foreach($seats as $seat){

                echo (floor($seat/5)+1)."排".(($seat%5)+1)."號";
                echo "<br>";
            }
        ?></div>
        <div>
            <button class="del" data-id="<?=$row['id'];?>">刪除</button>
        </div>
    </div>
    <hr>
    <?php 
        }

    ?>
</div>