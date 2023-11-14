<form action="index.php?act=add_rap" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Thêm Rap</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên Phòng </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ten_rap" placeholder="Điền tên Rap">
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="submit" name="them" class="btn btn-outline-success" value="Thêm"></input>
            <a href="index.php?act=list_rap"><input type="button" class="btn btn-outline-success" value="Danh sách"></a>
        </div>

    </div>
</form>