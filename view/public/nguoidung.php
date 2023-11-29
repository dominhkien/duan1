
<section class="speaker-banner bg_img" data-background="assets/images/banner/banner07.jpg">
    <div class="container">
        <div class="speaker-banner-content">
            <h2 class="title">Profile</h2>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Speaker-Single========== -->
<!-- Bảng Lịch Sử Đặt Vé -->
<section class="speaker-single padding-top pt-lg-0">
    <div class="container">
        <div class="speaker-wrapper bg-six padding-top padding-bottom">
            <!-- ... (Phần còn lại của mã HTML và PHP) ... -->
            <div>
                <img src="assets/images/film/avtpeople.jpg">
            </div>
            <div class="speaker-content">
                <div class="author">
                    <h5 class="title"><?php echo $_SESSION['khach_hang']['email'] ?></h5>
                </div>
                <div class="speak-con-wrapper">
                    <div class="speak-con-area">
                        <div class="item">
                            <div class="item-thumb">
                                <i class="fa-regular fa-address-card fa-2xl"></i>
                            </div>
                            <div class="item-content">
                                <span class="up">Thông tin liên hệ:</span>
                                <a href="MailTo:hello@Boleto .com"><?php echo $_SESSION['khach_hang']['email'] ?></a>
                            </div>
                        </div>
                        <ul class="social-icons">
                            <li>
                                <a href="#0">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#0" class="active">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content">
                    <h3 class="subtitle">Lịch Sử Đặt Vé</h3>
            <!-- Bảng Lịch Sử Đặt Vé -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Khách hàng</th>
                            <th scope="col">Tên phim</th>
                            <th scope="col">Ghế</th>
                            <th scope="col">Phòng</th>
                            <th scope="col">Ngày chiếu</th>
                            <th scope="col">Giờ chiếu</th>
                            <th scope="col">Tổng giá</th>
                            <th scope="col">Trạng thái</th>
                        </tr>
                    </thead>
                    
                    <tbody class="customtable">
                        <?php
                        // Kiểm tra xem $list_ve đã tồn tại và có phải là mảng không
                        if (isset($list_ve_kh) && is_array($list_ve_kh)) {
                            // Duyệt qua danh sách vé và chèn thông tin vào bảng
                            foreach ($list_ve_kh as $ve) {
                                echo '<tr>';
                                echo '<td>' . (is_array($ve) ? $ve['email'] : $ve) . '</td>';
                                echo '<td>' . (is_array($ve) ? $ve['ten_phim'] : $ve) . '</td>';
                                echo '<td>' . (is_array($ve) ? $ve['ghe'] : $ve)  . '</td>';
                                echo '<td>' . (is_array($ve) ? $ve['ten_phong'] : $ve) . '</td>';
                                echo '<td>' . (is_array($ve) ? $ve['ngay_chieu'] : $ve) . '</td>';
                                echo '<td>' .  (is_array($ve) ? $ve['gio_chieu'] : $ve) . '</td>';
                                echo '<td>' . (is_array($ve) ? $ve['tong_tien'] : $ve) . '</td>';
                                echo '<td>';
                                echo (is_array($ve) ? ($ve['trang_thai'] == 1 ? "Đã thanh toán" : "Chưa thanh toán") : '');
                                echo '</td>';
                                echo '</tr>';
                            }
                        } else {
                            // Hiển thị thông báo hoặc xử lý khi $list_ve không tồn tại hoặc không phải là mảng
                            echo '<tr><td colspan="8">Không có dữ liệu</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Kết thúc Bảng Lịch Sử Đặt Vé -->

        </div>
    </div>
</section>
<!-- Kết thúc Đoạn mã HTML và PHP thứ hai -->
