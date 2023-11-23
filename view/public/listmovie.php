   <!-- ==========Movie-Section========== -->
   <section class="movie-section padding-top padding-bottom">
       <div class="container">
           <div class="row flex-wrap-reverse justify-content-center">
               <div class="col-sm-10 col-md-8 col-lg-3">
                   <div class="widget-1 widget-check">
                       <div class="widget-1-body">
                           <h6 class="subtitle">Category</h6>
                           <div class="check-area">
                               <?php foreach ($list_loai as $loai) : ?>
                               <?php extract($loai);
                                    $link = "index.php?act=listphim&id_ctg=" . $id_loai;
                                    ?>
                               <div class="form-group">
                                   <a style="color: #ffffff;" href="<?= $link ?>"><?= $ten_loai ?></a>
                               </div>
                               <?php endforeach; ?>
                           </div>
                       </div>
                   </div>
                   <div class="widget-1 widget-banner">
                       <div class="widget-1-body">
                           <a href="#0">
                               <img src="https://plus.unsplash.com/premium_photo-1682146739433-5926577acb7a?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                   alt="">
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-lg-9 mb-50 mb-lg-0">
                   <div class="filter-tab tab">
                       <div class="filter-area">
                           <div class="filter-main">
                               <ul class="grid-button tab-menu">
                                   <li>
                                       <i class="fas fa-th"></i>
                                   </li>
                                   <li class="active">
                                       <i class="fas fa-bars"></i>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       <div class="tab-area">
                           <div class="tab-item">
                               <div class="row mb-10 justify-content-center">
                                   <?php foreach ($list_phim as $phim) : ?>
<<<<<<< HEAD
                                   <?php extract($phim);
                                        $link_phim = "index.php?act=ctphim&id_phim=" . $id_phim;
                                        ?>
=======
                                   <?php extract($phim) ?>
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                                   <div class="col-sm-6 col-lg-4">
                                       <div class="movie-grid">
                                           <div class="movie-thumb c-thumb">
                                               <a href="#0">
<<<<<<< HEAD
                                                   <img style="object-fit: cover;" src="upload/<?= $anh ?>" alt="">
=======
                                                   <img src="upload/<?= $anh ?>" alt="">
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                                               </a>
                                           </div>
                                           <div class="movie-content bg-one">
                                               <h5 class="title m-0">
<<<<<<< HEAD
                                                   <a href="<?= $link_phim ?>"><?= $ten_phim ?></a>
=======
                                                   <a href="#0"><?= $ten_phim ?></a>
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                                               </h5>
                                           </div>
                                       </div>
                                   </div>
                                   <?php endforeach; ?>
                               </div>
                           </div>
                           <div class="tab-item active">
                               <div class="movie-area mb-10">
                                   <?php foreach ($list_phim as $phim) : ?>
                                   <?php extract($phim);
<<<<<<< HEAD
                                        $date_of_phim = date_of_phim($id_phim);
                                        // var_dump($date_of_phim);
                                        $time_of_phim = time_of_phim($id_phim);
                                        // var_dump($time_of_phim);
                                        $link_phim = "index.php?act=ctphim&id_phim=" . $id_phim;
=======
                                        $format_date = date("d-m-Y", strtotime($ngay_chieu));
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                                        ?>
                                   <div class="movie-list">
                                       <div class="movie-thumb c-thumb">
                                           <a href="#0" class="w-100 bg_img h-100" data-background="upload/<?= $anh ?>">
                                               <img class="d-sm-none" src="upload/<?= $anh ?>" alt="movie">
                                           </a>
                                       </div>
                                       <div class="movie-content bg-one">
                                           <h5 class="title">
<<<<<<< HEAD
                                               <a href="<?= $link_phim ?>"><?= $ten_phim ?></a>
=======
                                               <a href="#0"><?= $ten_phim ?></a>
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                                           </h5>
                                           <p class="duration"><?= $thoi_luong ?> Phút</p>
                                           <div class="movie-tags">
                                               <a href="#0"><?= $ten_loai ?></a>
                                           </div>
                                           <div class="release">
<<<<<<< HEAD
                                               <span>Ngày chiếu : </span>
                                               <a href="#0">
                                                   <?= $date_of_phim['ngay_chieu'] ?? "" ?>
                                               </a>
                                           </div>
                                           <div class="release">
                                               <span>Giờ chiếu : </span>
                                               <a href="#0">
                                                   <?= $time_of_phim['gio_chieu'] ?? "" ?>
                                               </a>H
=======
                                               <span>Ngày chiếu : </span> <a href="#0"> <?= $format_date ?> </a>
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                                           </div>
                                       </div>
                                   </div>
                                   <?php endforeach; ?>
                               </div>
                           </div>
                       </div>
                       <div class="pagination-area text-center">
                           <a href="#0"><i class="fas fa-angle-double-left"></i><span>Prev</span></a>
                           <a href="#0">1</a>
                           <a href="#0">2</a>
                           <a href="#0" class="active">3</a>
                           <a href="#0">4</a>
                           <a href="#0">5</a>
                           <a href="#0"><span>Next</span><i class="fas fa-angle-double-right"></i></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- ==========Movie-Section========== -->