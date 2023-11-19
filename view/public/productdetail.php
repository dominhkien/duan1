<section style="margin-bottom: 200px;" class="details-banner bg_img" data-background="assets/images/banner/banner03.jpg">
    <div class="container">
        <?php extract($one_phim);
        $phong_of_phim = phong_of_phim($id_phim);
        $time_of_phim = time_of_phim($id_phim);
        $date_of_phim = date_of_phim($id_phim);
        $format_date = date("d-m-Y", strtotime($date_of_phim['ngay_chieu']));
        // var_dump($phong_of_phim);
        // var_dump($time_of_phim);
        // var_dump($date_of_phim);
        ?>
        <form action="index.php?act=ghe" class="details-banner-wrapper" method="post">
            <div class="details-banner-thumb">
                <img src="upload/<?= $anh ?>" alt="">
                <a href="<?= $trailer ?>" class="video-popup">
                    <img src="upload/<?= $anh ?>" alt="">
                </a>
            </div>

            <div class="details-banner-content offset-lg-3">
                <h3 class="title"><?= $ten_phim ?></h3>
                <input type="hidden" name="ten_phim" value="<?= $ten_phim ?>">
                <input type="hidden" name="id_phim" value="<?= $_GET['id_phim'] ?? "" ?>">
                <input type="hidden" name="id_phong" value="<?= $phong_of_phim['ten_phong'] ?? "" ?>">

                <div class="social-and-duration">
                    <div class="duration-area" style="margin-top:30px; display: flex; flex-direction: column; row-gap: 15px;">

                        <div class="item">
                            <i class="fa-solid fa-location-dot"></i><span><?= $dia_diem ?></span>
                            <input type="hidden" name="dia_diem" value="<?= $dia_diem ?>">
                        </div>

                        <div class="item">
                            <i class="fa-solid fa-film"></i><span><?= $ten_rap ?></span>
                            <input type="hidden" name="ten_rap" value="<?= $ten_rap ?>">
                        </div>

                        <div class="item">
                            <i class="fas fa-calendar-alt"></i><span><?= $format_date ?? '' ?></span>
                            <input type="hidden" name="ngay_chieu" value="<?= $format_date ?>">
                        </div>

                        <div class="item">
                            <i class="fa-solid fa-clock"></i><span><?= $time_of_phim['gio_chieu'] ?? '' ?> Phút</span>
                            <input type="hidden" name="gio_chieu" value="<?= $time_of_phim['gio_chieu'] ?? '' ?>">
                        </div>

                        <div class="item">
                            <i class="fa-solid fa-hourglass"></i></i><span><?= $thoi_luong ?> Phút</span>
                        </div>

                        <div class="item">
                            <p style="font-size: 18px;"><?= $mo_ta ?></p>
                        </div>

                    </div>
                </div>
                <button style="width: 100px; height: 50px; margin-top: 20px;" type="submit" class="btn btn-outline-success text-center">
                    Đặt vé
                </button>
            </div>
        </form>
    </div>
    </div>
</section>