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