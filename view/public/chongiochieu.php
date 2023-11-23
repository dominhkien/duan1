<section class="movie-section padding-top padding-bottom bg-two">
    <div class="container">
        <form action="index.php?act=chonphong" method="post">
            <input type="hidden" name="id_phim" value="<?= $id_phim ?>">
            <input type="hidden" name="id_diadiem" value="<?= $id_diadiem ?>">
            <input type="hidden" name="id_rap" value="<?= $id_rap ?>">
            <input type="hidden" name="id_ngaychieu" value="<?= $id_ngaychieu ?>">
            <select style="color: #000000;" name="id_giochieu">
                <option value="" disabled hidden selected>Giờ chiếu</option>
                <?php foreach ($list_giochieu as $gio_c) : ?>
                <?php extract($gio_c); ?>
                <option value="<?= $id_giochieu ?>"><?= $gio_chieu ?></option>
                <?php endforeach; ?>
            </select>

            <button style="width: 100px; height: 50px; margin-top: 20px;" type="submit"
                class="btn btn-outline-success text-center">
                Tiếp tục
            </button>
        </form>
    </div>
</section>