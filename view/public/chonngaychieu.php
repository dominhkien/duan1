<section class="movie-section padding-top padding-bottom bg-two">
    <div class="container">
        <form action="index.php?act=chongiochieu" method="post">
            <input type="hidden" name="id_phim" value="<?= $id_phim ?>">
            <input type="hidden" name="id_diadiem" value="<?= $id_diadiem ?>">
            <input type="hidden" name="id_rap" value="<?= $id_rap ?>">
            <select style="color: #000000;" name="id_ngaychieu">
                <option value="" disabled hidden selected>Ngày chiếu</option>
                <?php foreach ($list_ngay as $ngay) : ?>
                <?php
                    var_dump($list_ngay);
                    extract($ngay); ?>
                <option value="<?= $id_ngaychieu ?>"><?= $ngay_chieu ?></option>
                <?php endforeach; ?>
            </select>

            <button style="width: 100px; height: 50px; margin-top: 20px;" type="submit"
                class="btn btn-outline-success text-center">
                Tiếp tục
            </button>
        </form>
    </div>
</section>