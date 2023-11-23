<section class="movie-section padding-top padding-bottom bg-two">
    <div class="container">
        <form action="index.php?act=ghe" method="post">
            <input type="hidden" name="id_phim" value="<?= $id_phim ?>">
            <input type="hidden" name="id_diadiem" value="<?= $id_diadiem ?>">
            <input type="hidden" name="id_rap" value="<?= $id_rap ?>">
            <input type="hidden" name="id_ngaychieu" value="<?= $id_ngaychieu ?>">
            <input type="hidden" name="id_giochieu" value="<?= $id_giochieu ?>">
            <select style="color: #000000;" name="id_phong">
                <option value="" disabled hidden selected>Phòng chiếu</option>
                <?php foreach ($list_phong as $phong) : ?>
                    <?php
                    var_dump($list_phong);
                    extract($phong); ?>
                    <option value="<?= $id_phong ?>"><?= $ten_phong ?></option>
                <?php endforeach; ?>
            </select>

            <button style="width: 100px; height: 50px; margin-top: 20px;" type="submit" class="btn btn-outline-success text-center">
                Tiếp tục
            </button>
        </form>
    </div>
</section>