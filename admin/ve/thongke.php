<div style="padding-left: 250px;" id="main-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body printableArea">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-left">
                                <address>
                                    <h3> &nbsp;<b class="text-danger">Vé Đã Thanh Toán</b></h3>
                                </address>
                            </div>
                            <div class="pull-right text-right">
                                <address>
                                    <?php
                                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                                    $currentDate = date('Y-m-d');
                                    echo $currentDate; ?>
                                    <p><b>Ngày: </b> <i class="fa fa-calendar"> <?= $currentDate ?> </i> </p>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive m-t-40" style="clear: both;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Khách hàng</th>
                                            <th class="text-center">Tên phim</th>
                                            <th class="text-center">Giờ chiếu</th>
                                            <th class="text-center">Ghế</th>
                                            <th class="text-center">Giá vé</th>
                                            <th class="text-center">Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($da_thanhtoan as $da_tt) : ?>
                                        <?php
                                            extract($da_tt);
                                            $fm_gia = number_format($tong_tien, 0, ',', '.');
                                            $fm_tong_gia_datt = number_format($tong_tien_ve, 0, ',', '.');
                                            $fm_tb_gia_datt = number_format($tb_giave, 0, ',', '.');
                                            ?>
                                        <tr>
                                            <td class="text-center"><?= $id_ve ?></td>
                                            <td class="text-center"><?= $email ?></td>
                                            <td class="text-center"><?= $ten_phim ?></td>
                                            <td class="text-center"> <?= $gio_chieu ?> </td>
                                            <td class="text-center"> <?= $ds_ghe ?> </td>
                                            <td class="text-center"> <?= $fm_gia ?> </td>
                                            <td class="text-center"> <?php if ($trang_thai == 1) {
                                                                                echo "Đã thanh toán";
                                                                            } ?> </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pull-right m-t-30 text-right">
                                <p>Tổng giá: <?= $fm_tong_gia_datt ?> VND</p>
                                <p>Giá trung bình: : <?= $fm_tb_gia_datt ?> VND</p>
                                <hr>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

