<!-- ==========Newslater-Section========== -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-top">
            <div class="logo">
                <a href="index-1.html">
                    <img style="width: 180px; height: 80px; object-fit: cover;" src="assets/images/footer/logoquy.png" alt="footer">
                </a>
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
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fab fa-google"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-area">
                <div class="left">
                    <p>Copyright © 2020.All Rights Reserved By <a href="#0">Boleto </a></p>
                </div>
                <ul class="links">
                    <li>
                        <a href="#0">About</a>
                    </li>
                    <li>
                        <a href="#0">Terms Of Use</a>
                    </li>
                    <li>
                        <a href="#0">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#0">FAQ</a>
                    </li>
                    <li>
                        <a href="#0">Feedback</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- ==========Newslater-Section========== -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/modernizr-3.6.0.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/heandline.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/countdown.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/viewport.jquery.js"></script>
<script src="assets/js/nice-select.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/ghe.js"></script>
</body>
<script>
    $(function() {
        // Xử lý sự kiện gửi comment
        $("#commentForm").submit(function(e) {
            e.preventDefault();
            var comment = $("#comment").val();
            $.ajax({
                method: "POST",
                data: {
                    comment: comment
                },
                success: function(response) {
                    // Hiển thị comment mới trong danh sách bình luận
                    var newComment = $("<div>").addClass("comment");
                    var commentElement = $("<p>").addClass("content").text(comment);
                    newComment.append(commentElement);
                    $("#commentList").append(newComment);

                    // Xóa nội dung trong trường nhập liệu
                    $("#comment").val("");
                }
            });
        });
    });
</script>

</html>