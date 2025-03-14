<div style="margin-left: 250px;" class="row text-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Danh sách vé</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Khách hàng</th>
                            <th scope="col">Tên phim</th>
                            <th scope="col">Ghế</th>
                            <th scope="col">Phòng</th>
                            <th scope="col">Ngày chiếu</th>
                            <th scope="col">Giờ chiếu</th>
                            <th scope="col">Tổng giá</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">!</th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                        <?php foreach ($list_ve as $ve) : ?>
                        <?php extract($ve);
                            $timestamp = strtotime($ngay_chieu);
                            $fm_date = date("d/m/Y", $timestamp);
                            $thanh_tien = number_format($tong_tien, '0', '.', ',');
                            $capnhatve = "index.php?act=trangthaive&id_ve=" . $id_ve;
                            ?>
                        <tr>
                            <td><?= $id_ve ?></td>
                            <td><?= $email ?></td>
                            <td><?= $ten_phim ?></td>
                            <td><?= $ds_ghe ?></td>
                            <td><?= $ten_phong ?></td>
                            <td><?= $fm_date ?></td>
                            <td><?= $gio_chieu ?></td>
                            <td><?= $thanh_tien ?></td>
                            <td>
                                <?php if ($trang_thai == 1) {
                                        echo "Đã thanh toán";
                                    } else {
                                        echo "Chưa thanh toán";
                                    } ?></td>
                            <td>
                                <button type="button" class="btn btn-outline-success text-center">
                                    <a style="color: #000000;" href="<?= $capnhatve ?>">Cập nhật</a>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-success text-center">
        <a style="color: #000000;" href="index.php?act=addphim">Thêm</a>
    </button>
    <button style="margin-left: 20px;" type="button" class="btn btn-outline-success text-center">
        <a style="color: #000000;" href="index.php?act=thongkeve">Thống kê</a>
    </button>
</div>