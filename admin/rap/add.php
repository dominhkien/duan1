<form action="index.php?act=add_rap" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Thêm Rap</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên Phòng </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="ten_rap" placeholder="Điền tên Rap">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa Điểm </label>
            <div class="col-sm-9">
                <select name="id_diadiem">
                    <option value="" disabled hidden selected>Địa điểm</option>
                    <?php foreach ($list_diadiem as $diadiem) : ?>
<<<<<<< HEAD
                    <?php extract($diadiem); ?>
                    <option value="<?= $id_diadiem ?>"><?= $id_diadiem ?> - <?= $ten_diadiem ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phong</label>
            <div class="col-sm-9">
                <select name="id_phong">
                    <option value="" disabled hidden selected>Phong</option>
                    <?php foreach ($list_phong as $phong) : ?>
                    <?php extract($phong); ?>
                    <option value="<?= $id_phong ?>"><?= $id_phong ?> - <?= $ten_phong ?> </option>
=======
                        <?php extract($diadiem); ?>
                        <option value="<?= $id_diadiem ?>"><?= $id_diadiem ?> - <?= $ten_diadiem ?> </option>
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                    <?php endforeach; ?>
                </select>
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