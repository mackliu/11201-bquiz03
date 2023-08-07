<style>
.posters *,
.controls *{
    box-sizing: border-box;
}

.posters{
    width:210px;
    height:240px;
    margin:2px auto;
    border:1px solid white;
}
.controls {
    display:flex;
    align-items: center;
    justify-content: space-between;
}
.icons{
    width:320px;
    height:110px;
    border:1px solid white;
}
</style>
<div class="half" style="vertical-align:top;">
    <h1>預告片介紹</h1>
    <div class="rb tab" style="width:95%;">
        <div class="posters">
            <div class="poster">
                <img src="" alt="">
                <div class="name"></div>
            </div>

        </div>
        <div class="controls">
            <div class="left"></div>
            <div class="icons">
                <div class="icon"></div>
            </div>
            <div class="right"></div>
        </div>
    </div>
</div>

<style>
.movies *{
    box-sizing: border-box;
}
.movies{
    display:flex;
    flex-wrap:wrap;
    justify-content: space-evenly;
    height:270px;
    align-items: start;
}
.movie{
    width:48%;
    border:1px solid white;
    padding:5px;
    border-radius: 5px;
    margin:2px 0;
}
.row{
    display:flex;
    justify-content: center;
    align-items: center;
}
.poster{
    width:30%;
    height:90px;
}
.info div:nth-child(1){
    font-size:18px;
}
</style>
<div class="half">
    <h1>院線片清單</h1>
    <div class="rb tab" style="width:100%;">
        <div class='movies'>
        <?php
        $rows=$Movie->movies();
        foreach($rows as $row){
        ?>
            <div class="movie">
                <div class="row">
                    <div class="poster">
                        <a href="?do=intro&id=<?=$row['id'];?>">
                            <img src="./upload/<?=$row['poster'];?>" style="width:100%;height:100%">
                        </a>
                    </div>
                    <div class="info">
                        <div><?=$row['name'];?></div>
                        <div>分級:
                            <img src="./icon/03C0<?=$row['level'];?>.png" style="width:20px;height:20px">
                            <?=$Movie->level($row['level']);?>
                        </div>
                        <div>
                            上映日期:<?=$row['ondate'];?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button onclick="location.href='?do=intro&id=<?=$row['id'];?>'">劇情簡介</button>
                    <button onclick="location.href='?do=order&id=<?=$row['id'];?>'">線上訂票</button>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
        <div class="ct pagi"><?=$Movie->links();?></div>
    </div>
</div>