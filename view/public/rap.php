<section class="movie-section padding-top padding-bottom bg-two">
    <div class="container">
        <form action="index.php?act=chonngaychieu" method="post">
            <input type="hidden" name="id_phim" value="<?= $id_phim ?>">
            <input type="hidden" name="id_diadiem" value="<?= $id_diadiem ?>">
            <select style="color: #000000;" name="id_rap">
                <option value="" disabled hidden selected>Rạp</option>
                <?php foreach ($list_rap as $rap) : ?>
                <?php extract($rap); ?>
                <option value="<?= $id_rap ?>"><?= $ten_rap ?></option>
                <?php endforeach; ?>
            </select>

            <button style="width: 100px; height: 50px; margin-top: 20px;" type="submit"
                class="btn btn-outline-success text-center">
                Tiếp tục
            </button>
        </form>
    </div>
</section>