<style>
#form *,
#booking * {
    box-sizing: border-box;
}

#select{
    width:400px;
    margin:auto;
    padding:20px;
    background-color: #666;
}
#select div:nth-child(odd){
    background-color: #999;
}
#select div:nth-child(even){
    background-color: #ccc;
}
.select{
    display:flex;
    margin:2px;
    align-items: center;
}
.select label{
    width:20%;
    text-align: center;
}
.select select{
    width:80%;
}
</style>
<div id="form">
    <h3 class='ct'>線上訂票</h3>
    <form id="select">
        <div class="select">
            <label for="">電影：</label>
            <select name="movie" id="movie"></select>
        </div>
        <div class="select">
            <label for="">日期：</label>
            <select name="date" id="date"></select>
        </div>
        <div class="select">
            <label for="">場次：</label>
            <select name="session" id="session"></select>
        </div>
        <div class="ct">
            <input type="button" value="確定">
            <input type="reset" value="重置">
        </div>
    </form>
</div>

<div id="booking" style="display:none">
    劃位

    <button onclick="$('#form,#booking').toggle()">上一步</button>
</div>