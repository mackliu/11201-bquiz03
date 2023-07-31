<div class="ct">預告片清單</div>
<div style="display:flex;justify-content:space-between;text-align:center">
    <div style="width:24%;background:#999">預告片海報</div>
    <div style="width:24%;background:#999">預告片片名</div>
    <div style="width:24%;background:#999">預告片排序</div>
    <div style="width:24%;background:#999">操作</div>
</div>
<form action="./api/edit_posters.php" method="post">
<div style="overflow:auto;height:200px;">

<div style="background:white;margin:1px 0 ;width:100%;display:flex;justify-content:space-between;text-align:center">
    <div style="width:24%"></div>
    <div style="width:24%">
        <input type="text" name="name[]" id="">
    </div>
    <div style="width:24%"></div>
    <div style="width:24%">
        <input type="checkbox" name="sh[]" id="">顯示
        <input type="checkbox" name="del[]" id="">刪除
        <select name="ani[]" id="">
            <option value="1">淡入淡出</option>
            <option value="2">縮放</option>
            <option value="3">滑入滑出</option>
        </select>
    </div>
</div>



</div>
<div class="ct">
    <input type="submit" value="編輯確定"><input type="reset" value="重置">
</div>
</form>