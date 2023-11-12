<form action="index.php?act=addloaiphim" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Thêm Loại Phim</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại Phim</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="loaiphim" placeholder="Điền tên loại phim">
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="submit" name="them" class="btn btn-outline-success" value="Thêm"></input>
            <a href="index.php?act=dsloaiphim"><input type="button" class="btn btn-outline-success" value="Danh sách"></a>
        </div>

    </div>
</form>