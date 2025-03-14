<?php
if (is_array($one_phong)) {
    extract($one_phong);
}
?>
<form action="index.php?act=sua_phong" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Sửa Phong</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label"> Tên Phòng</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ten_phong" value="<?= $ten_phong ?>" placeholder="Điền tên phong">
                <input type="hidden" name="id_phong" value="<?= $id_phong ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">phim </label>
            <div class="col-sm-9">
                <select name="id_phim">
                    <option value="<?= $id_phim ?>"><?= $id_phim ?></option>
                    <?php foreach ($list as $phim) : ?>
                        <?php extract($phim) ?>
                        <option value="<?= $id_phim ?>"><?= $id_phim ?> - <?= $ten_phim ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Rạp</label>
            <div class="col-sm-9">
                <select name="id_rap">
                    <option value="<?= $id_rap ?>">Rạp</option>
                    <?php foreach ($list_rap as $rap) : ?>
                        <?php extract($rap); ?>
                        <option value="<?= $id_rap ?>"><?= $id_rap ?> - <?= $ten_rap ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="submit" name="capnhap" class="btn btn-outline-success" value="Sửa"></input>
            <a href="index.php?act=dsphong"><input type="button" class="btn btn-outline-success" value="Danh sách"></a>
        </div>

    </div>
</form>