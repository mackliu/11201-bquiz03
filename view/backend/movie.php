<style>
    .movie{
        display:flex;
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
<div class="movie">
    <div class="col">
        <img src="" alt="">
    </div>
    <div class="col">
        分級: <img src="" alt="">
    </div>
    <div class="col">
        <div class="row">
            <div class="info">片名:</div>
            <div class="info">片長:</div>
            <div class="info">上映時間:</div>
        </div>
        <div class="row">
            <button>顯示</button>
            <button>往上</button>
            <button>往下</button>
            <button>編輯電影</button>
            <button>刪除電影</button>
        </div>
        <div class="row">
            劇情介紹:
        </div>
    </div>
</div>