<?php
// var_dump($_POST);
// var_dump($_SESSION['datve']);
$phim = ten_of_phim($id_phim);
// var_dump($phim);
?>
<!-- ==========Event-Section========== -->
<div class="event-facility padding-bottom padding-top">
    <div class="container">
        <form action="index.php?act=thanhtoanok" class="row" method="post">
            <input type="hidden" name="id_phim" value="<?= $id_phim ?>">
            <input type="hidden" name="id_diadiem" value="<?= $id_diadiem ?>">
            <input type="hidden" name="id_rap" value="<?= $id_rap ?>">
            <input type="hidden" name="id_ngaychieu" value="<?= $id_ngaychieu ?>">
            <input type="hidden" name="id_giochieu" value="<?= $id_giochieu ?>">
            <input type="hidden" name="id_phong" value="<?= $id_phong ?>">
            <div class="col-lg-8">
                <div class="checkout-widget checkout-card mb-0">
                    <h5 class="title">Thanh toán trực tiếp </h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="booking-summery bg-one">
                    <h4 class="title">thanh toán online</h4>
                    <ul>
                        <?php foreach ($phim as $index => $p) : ?>
                            <?php if ($index === 0) : ?>
                                <?php
                                extract($p);
                                $timestamp = strtotime($ngay_chieu);
                                $fm_date = date("d/m/Y", $timestamp);
                                ?>
                                <li>
                                    <h6 class="subtitle"><?= $ten_phim ?></h6>
                                </li>
                                <li>
                                    <h6 class="subtitle"><span><?= $ten_rap ?></span></h6>
                                    <div class="info"><span><?= $fm_date ?> vào lúc: <?= $gio_chieu ?> Giờ</span>
                                        <span>Tickets</span>
                                    </div>
                                </li>
                                <li>
                                    <h6 class="subtitle mb-0"><span>Tickets
                                            Price</span><span><?= $_SESSION['datve']['tong_gia'] ?> $</span></h6>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                    <ul>
                        <li>
                            <span class="info"><span>Film price</span><span><?= $gia_phim ?> $</span></span>
                        </li>
                    </ul>
                </div>
                <div class="proceed-area  text-center">
                    <?php $tong_gia = $_SESSION['datve']['tong_gia'] + $gia_phim ?>
                    <h6 class="subtitle"><span>total price</span><span><?= $tong_gia ?> $</span></h6>
                    <button type="submit" class="custom-button back-button">pay</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ==========Event-Section========== -->