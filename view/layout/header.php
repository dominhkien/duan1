<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title><?= $title ?? "" ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/all.min.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/animate.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/flaticon.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/magnific-popup.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/odometer.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/nice-select.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/main.css?ver=<?= rand() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.php">
                        <img style="width: 170px; height: 80px; object-fit: cover;" src="assets/images/logo/logoquy.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php" class="active">Home</a>
                    </li>
                    <li>
                        <a href="index.php?act=listphim">movies</a>
                    </li>
                    <li>
                        <a href="contact.html">location</a>
                    </li>
                    <li class="header-button pr-0">
                        <a href="sign-up.html">join us</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>