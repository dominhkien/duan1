<section style="margin-bottom: 200px;" class="details-banner bg_img" data-background="assets/images/banner/banner03.jpg">
    <div class="container">
        <?php extract($one_phim);
        ?>
        <form action="index.php?act=chondiadiem" class="details-banner-wrapper" method="post">
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

                <div style="margin: 20px 0;" class="social-and-duration">
                    <div class="duration-area" style="margin-top:30px; display: flex; flex-direction: column; row-gap: 15px;">
                        <div class="item">
                            <p style="font-size: 18px;"><?= $thoi_luong ?> Phút</p>
                        </div>

                        <div class="item">
                            <p style="font-size: 18px;"><?= $mo_ta ?></p>
                        </div>
                    </div>
                </div>

                <button style="width: 100px; height: 50px; margin-top: 20px;" type="submit" class="btn btn-outline-success text-center">
                    Tiếp tục
                </button>
            </div>
        </form>


</section>
<?php
var_dump($_SESSION['khach_hang']);
// extract($_SESSION['khach_hang']);
?>
<h3>Bình luận</h3>
<div class="movie-review-item">
    <div class="author">
        <div class="movie-review-info">
            <h6>Tên Người Dùng</h6>
            <br>
            <h6 class="subtitle"><?php echo $_SESSION['khach_hang']['email']?></h6>
        </div>
    </div>
    <?php
// Xử lý yêu cầu Ajax
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {
    // Lấy nội dung bình luận từ dữ liệu gửi đi
    $comment = $_POST['comment'];

    // Lưu nội dung bình luận vào session
    if (!isset($_SESSION['comments'])) {
        $_SESSION['comments'] = array();
    }
    $_SESSION['comments'][] = $comment;

    // Phản hồi với kết quả thành công
    echo "success";
    exit; // Kết thúc xử lý yêu cầu Ajax
}
?>
    <div class="movie-review-content">
        <h6 class="cont-title">Bình Luận</h6>
        <div id="commentList"></div>
        <?php
    // Kiểm tra xem có bình luận trong session hay không
    if (isset($_SESSION['comments'])) {
        // Lặp qua danh sách bình luận và hiển thị chúng
        foreach ($_SESSION['comments'] as $comment) {
            echo '<div class="comment">';
            echo '<p class="content">' . $comment . '</p>';
            echo '</div>';
        }
    }
    ?>
    </div>
</div>
<div id="commentSection" style="margin-top:40px;">
    <form id="commentForm">
        <textarea name="comment" id="comment" 
        placeholder="Nội dung bình luận" style="resize: vertical; width: 80%; height: 60px; margin-left: 80px;"></textarea>
        <button type="submit" id="submitComment" 
        class="btn btn-outline-success text-center" style="width: 100px; height: 60px; margin-top: -52px;">Gửi</button>
    </form>
</div>
