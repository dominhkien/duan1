<section class="details-banner bg_img" data-background="assets/images/banner/banner03.jpg">
    <div class="container">
        <?php extract($one_phim);
        $format_date = date("d-m-Y", strtotime($ngay_chieu))
        ?>
        <div class="details-banner-wrapper">
            <div class="details-banner-thumb">
                <img src="upload/<?= $anh ?>" alt="">
                <a href="<?= $trailer ?>" class="video-popup">
                    <img src="upload/<?= $anh ?>" alt="">
                </a>
            </div>

            <div class="details-banner-content offset-lg-3">
                <h3 class="title"><?= $ten_phim ?></h3>
                <div class="social-and-duration">
                    <div class="duration-area" style="margin-top:30px; display: flex; flex-direction: column;">

                        <div class="item">
                            <i class="fa-solid fa-location-dot"></i><span><?= $dia_diem ?></span>
                        </div>

                        <div class="item">
                            <i class="fa-solid fa-film"></i><span><?= $ten_rap ?></span>
                        </div>

                        <div class="item">
                            <i class="fas fa-calendar-alt"></i><span><?= $format_date ?></span>
                        </div>

                        <div class="item">
                            <i class="fa-solid fa-clock"></i><span><?= $gio_chieu ?> Phút</span>
                        </div>

                        <div class="item">
                            <i class="fa-solid fa-hourglass"></i></i><span><?= $thoi_luong ?> Phút</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section style="margin-top: 100px;" class="movie-details-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center flex-wrap-reverse mb--50">
            <div class="col-lg-9 mb-50">
                <div class="movie-details">
                    <div class="tab summery-review">
                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="item">
                                    <h5 class="sub-title">Describe</h5>
                                    <p><?= $mo_ta ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>