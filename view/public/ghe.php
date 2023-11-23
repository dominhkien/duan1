<!-- MAIN -->
<div class="list-chair">
    <form action="index.php?act=pay" class="wpr-list-chair" method="post">
        <input type="hidden" name="id_phim" value="<?= $id_phim ?>">
        <input type="hidden" name="id_diadiem" value="<?= $id_diadiem ?>">
        <input type="hidden" name="id_rap" value="<?= $id_rap ?>">
        <input type="hidden" name="id_ngaychieu" value="<?= $id_ngaychieu ?>">
        <input type="hidden" name="id_giochieu" value="<?= $id_giochieu ?>">
        <input type="hidden" name="id_phong" value="<?= $id_phong ?>">
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

                <div class="chair">
                    <ul>
                        <?php foreach ($list_10ghe as $index => $ghe1) : ?>
                            <?php extract($ghe1); ?>
                            <li>
                                <input type="checkbox" name="ten_ghe[]" value="<?= $ten_ghe ?>" readonly>
                                <input type="hidden" value="<?= $gia_ghe ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <ul>
                        <?php foreach ($list_20ghe as $ghe2) : ?>
                            <?php extract($ghe2); ?>
                            <li>
                                <input type="checkbox" name="ten_ghe[]" value="<?= $ten_ghe ?>" readonly>
                                <input type="hidden" value="<?= $gia_ghe ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <ul>
                        <?php foreach ($list_30ghe as $ghe3) : ?>
                            <?php extract($ghe3); ?>
                            <li>
                                <input type="checkbox" name="ten_ghe[]" value="<?= $ten_ghe ?>" readonly>
                                <input type="hidden" value="<?= $gia_ghe ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
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

        <?php extract($tt_phim) ?>
        <div class="right-wpr-list-chair">
            <div class="content-bill">
                <div class="info-film">
                    <div class="name-film">
                        <strong>
                            Tên phim: <?= $ten_phim ?>
                        </strong>
                    </div>
                    <div class="theater-film">
                        <strong>
                            Địa điểm:<?= $dia_diem ?>
                        </strong>
                    </div>
                    <div class="theater-film">
                        <strong>
                            Rạp: <?= $ten_rap ?>
                        </strong>
                    </div>
                    <div class="theater-film">
                        <strong>
                            Ngày: <?= $ngay_chieu ?>
                        </strong>
                    </div>
                    <div class="theater-film">
                        <strong>
                            Giờ chiếu: <?= $gio_chieu ?>:00
                        </strong>
                    </div>

                    <div class="room-film">
                        <span>
                            Phòng chiếu <?= $ten_phong ?> - Ghế:
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
                        <input type="hidden" name="tong_gia" value="0">
                    </div>
                </div>
                <button type="submit">Tiếp tục</button>
            </div>
        </div>
    </form>
</div>
<!-- END MAIN -->