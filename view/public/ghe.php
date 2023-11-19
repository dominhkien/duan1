<!-- MAIN -->
<div class="list-chair">
    <div class="wpr-list-chair">
        <div class="left-wpr-list-chair">
            <div class="title-chair">
                <h1>
                    Ghế Ngồi
                </h1>
            </div>

            <div class="chairs">
                <div class="left-chair">
                    <ul>
                        <li>a</li>
                        <li>b</li>
                        <li>c</li>
                    </ul>
                </div>

                <form class="chair" accept="" method="get">
                    <ul>
                        <?php foreach ($list_10ghe as $ghe1) : ?>
                            <?php extract($ghe1); ?>
                            <li>
                                <input type="text" value="<?= $ten_ghe ?>" readonly>
                                <input type="hidden" value="<?= $gia_ghe ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <ul>
                        <?php foreach ($list_20ghe as $ghe2) : ?>
                            <?php extract($ghe2); ?>
                            <li>
                                <input type="text" value="<?= $ten_ghe ?>" readonly>
                                <input type="hidden" value="<?= $gia_ghe ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <ul>
                        <?php foreach ($list_30ghe as $ghe3) : ?>
                            <?php extract($ghe3); ?>
                            <li>
                                <input type="text" value="<?= $ten_ghe ?>" readonly>
                                <input type="hidden" value="<?= $gia_ghe ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </form>
            </div>

            <div class="info-chair">
                <ul>
                    <li></li>
                    <span>Đã đặt</span>
                    <li></li>
                    <span>Chưa đặt</span>
                </ul>
            </div>
        </div>
        <?php // var_dump($_POST)
        extract($_POST);
        ?>
        <div class="right-wpr-list-chair">
            <form action="" class="content-bill" method="post">
                <div class="info-film">
                    <div class="name-film">
                        <p>
                            <?= $ten_phim ?>
                        </p>
                        <input type="hidden" name="">
                    </div>
                    <div class="theater-film">
                        <strong>
                            <?= $dia_diem ?>
                        </strong>
                        <input type="hidden" name="">
                    </div>
                    <div class="theater-film">
                        <strong>
                            <?= $ten_rap ?>
                        </strong>
                        <input type="hidden" name="">
                    </div>
                    <div class="date-film">
                        <p>
                            <?= $ngay_chieu ?> Vào <?= $gio_chieu ?> Giờ
                        </p>
                        <input type="hidden" name="">
                    </div>
                    <div class="room-film">
                        <span>
                            Phòng: <?= $id_phong ?>
                        </span>
                        <input type="hidden" name="">
                    </div>
                </div>

                <div class="price-film">
                    <div class="title-price-film">
                        <span>
                            TỔNG ĐƠN HÀNG
                        </span>
                        <h3 id="selected-chair-price">0 nghin</h3>
                        <input type="hidden" name="" value="0">
                    </div>
                </div>
                <button type="submit">Tiếp tục</button>
            </form>
        </div>
    </div>
</div>
<!-- END MAIN -->