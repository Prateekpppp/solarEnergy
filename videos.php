<?php

    $pageTitle = 'Gallery';
    
   include('includes/head.php');

   include('includes/breadcrumb.php');

?>

                 <!-- Shop Section Start -->
                <section class="shop-section section-padding">
                    <div class="container container-2">
                        <div class="row g-4">
                            <div class="col-lgdfg-8 order-1 order-lg-2">
                                <div class="row g-4">
                                    <div class="col-xl-4 col-lg-6 col-md-6 fadeInUp">
                                        <div class="shop-box-style-item">
                                            <div class="shop-image">
                                                <?php 
                                                
                                                    include('includes/videoSection.php');

                                                ?>
                                                <!-- <div class="video-section fix">
                                                    <div class="video-wrapper fix">
                                                        <img data-speed=".8" src="img/home-1/video-image.jpg" alt="img">
                                                        <div class="video">
                                                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-popup ripple video-btn">
                                                            <i class="fas fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp">
                                        <div class="shop-box-style-item">
                                            <div class="shop-image">
                                                <img src="assets/img/inner/shop/shop-01.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<?php

include('includes/foot.php');

?>