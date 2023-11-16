<form action="index.php?act=add_showtime" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Thêm Giờ Chiếu</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giờ Chiếu</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="gio_chieu" placeholder="Điền giờ chiếu">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày chiếu</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ngay_chieu" placeholder="Điền Ngày chiếu">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phim</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="id_phim" placeholder="Điền phim">
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="submit" name="them" class="btn btn-outline-success" value="Thêm"></input>
            <a href="index.php?act=list_showtime"><input type="button" class="btn btn-outline-success" value="Danh sách"></a>
        </div>
    </div>
</form>