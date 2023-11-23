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
<<<<<<< HEAD
                <input type="text" class="form-control" name="gio_chieu" value="<?= $gio_chieu ?>" placeholder="Điền Giờ Chiếu">
=======
                <input type="text" class="form-control" name="giochieu" value="<?= $gio_chieu ?>" placeholder="Điền Giờ Chiếu">
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                <input type="hidden" name="id_giochieu" value="<?= $id_giochieu ?>">
            </div>
        </div>
        <div class="form-group row">
<<<<<<< HEAD
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Điền ngay chieu</label>
            <div class="col-sm-9">
                <select name="id_ngaychieu">
                    <option value="<?= $id_phim ?>"><?= $id_ngaychieu ?></option>
                    <?php foreach ($list_ngaychieu as $ngay_chieu) : ?>
                        <?php extract($ngay_chieu); ?>
                        <option value="<?= $id_ngaychieu ?>"><?= $id_ngaychieu ?> - <?= $ngay_chieu ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Điền phim</label>
            <div class="col-sm-9">
                <select name="id_phim">
                    <option value="<?= $id_phim ?>"><?= $id_phim ?></option>
                    <?php foreach ($list as $phim) : ?>
                        <?php extract($phim); ?>
                        <option value="<?= $id_phim ?>"><?= $id_phim ?> - <?= $ten_phim ?></option>
                    <?php endforeach; ?>
                </select>
=======
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày chiếu</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ngay_chieu" value="<?= $id_ngaychieu ?>" placeholder="Điền Ngày chiếu">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phim</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="id_phim" value="<?= $id_phim ?>" placeholder="Điền phim">
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
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