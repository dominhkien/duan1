<section class="movie-section padding-top padding-bottom bg-two">
    <div class="container">
        <form action="index.php?act=chonrap" method="post">
            <input type="hidden" name="id_phim" value="<?= $id_phim ?>">
            <select style="color: #000000;" name="id_diadiem">
                <option value="" disabled hidden selected>Địa điểm</option>
                <?php foreach ($list_diadiem as $dia_diem) : ?>
                    <?php extract($dia_diem); ?>
                    <option value="<?= $id_diadiem ?>"><?= $ten_diadiem ?></option>
                <?php endforeach; ?>
            </select>

            <button style="width: 100px; height: 50px; margin-top: 20px;" type="submit" class="btn btn-outline-success text-center">
                Tiếp tục
            </button>
        </form>
    </div>
</section>