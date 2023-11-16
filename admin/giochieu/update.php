<?php
if (is_array($one_showtime)) {
    extract($one_showtime);
}
?>
<form action="index.php?act=update_time" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Sửa Giờ Chiếu</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giờ Chiếu</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="giochieu" value="<?= $gio_chieu ?>" placeholder="Điền Giờ Chiếu">
                <input type="hidden" name="id_giochieu" value="<?= $id_giochieu ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày chiếu</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ngay_chieu" value="<?= $id_ngaychieu ?>" placeholder="Điền Ngày chiếu">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phim</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="id_phim" value="<?= $id_phim ?>" placeholder="Điền phim">
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="submit" name="capnhap" class="btn btn-outline-success" value="Sửa"></input>
            <a href="index.php?act=list_showtime"><input type="button" class="btn btn-outline-success" value="Danh sách"></a>
        </div>

    </div>
</form>