<div id="form">
    <h3 class='ct'>線上訂票</h3>
    <form id="select">
        <div class="select">
            <label for=""></label>
            <select name="movie" id="movie"></select>
        </div>
        <div class="select">
            <label for=""></label>
            <select name="date" id="date"></select>
        </div>
        <div class="select">
            <label for=""></label>
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