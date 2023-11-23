<form action="index.php?act=add_phong" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Thêm Phòng</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên Phòng </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ten_phong" placeholder="Điền tên Phòng">
            </div>
        </div>
<<<<<<< HEAD
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">phim </label>
            <div class="col-sm-9">
                <select name="id_phim">
                    <option value="" disabled hidden selected>Phim</option>
                    <?php foreach ($list as $phim) : ?>
                        <?php extract($phim) ?>
                        <option value="<?= $id_phim ?>"><?= $id_phim ?> - <?= $ten_phim ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
=======
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="submit" name="them" class="btn btn-outline-success" value="Thêm"></input>
<<<<<<< HEAD
            <a href="index.php?act=list_phong"><input type="button" class="btn btn-outline-success" value="Danh sách"></a>
=======
            <a href="index.php?act=list_phong"><input type="button" class="btn btn-outline-success"
                    value="Danh sách"></a>
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
        </div>

    </div>
</form>