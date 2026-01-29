<?php

    $pageTitle = 'Contact Us';
    
   include('includes/head.php');

   include('includes/breadcrumb.php');

?>


                <!--Contact Section Start -->
                <section class="contact-section fix section-padding">
                    <div class="container container-2">
                        <div class="contact-top">
                            <h2 class="hero_title tv_hero_title hero_title_1">
                                Our Contact Information
                            </h2>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon-box-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <div class="content">
                                            <p>Call Us 7/24</p>
                                            <h5><a href="tel:+2085550112">+91 <?= $phone ?></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon-box-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <p>Location</p>
                                            <h5><?= $address ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="icon-box-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <p>Make a Quote</p>
                                            <h5>
                                                <a href="mailto:<?= $email ?>" class="link"><?= $email ?></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-middle-items">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="contact.php" id="contact-form" class="contact-form-box">
                                        <h3 class="hero_title tv_hero_title hero_title_1">Get In Touch</h3>
                                            <div class="row g-4 align-items-center justify-content-center">
                                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="form-clt">
                                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                                <div class="form-clt">
                                                    <input type="text" name="email" id="email2" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                                <div class="form-clt">
                                                    <input type="text" name="phone" id="phone" placeholder="Phone number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                                <div class="form-clt">
                                                    <input type="text" name="subject" id="subject" placeholder="Select Subject">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                                                <div class="form-clt">
                                                    <textarea name="message" id="message" placeholder="Write a message..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                                <div class="contact-button">
                                                    <button type="submit" class="theme-btn">
                                                    Submit Now
                                                        <i class="far fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <div class="google-map-items">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7195.913051272897!2d85.15938736667306!3d25.606360834546525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed59554ece5703%3A0x7c5c386a0ac803eb!2sRajendra%20nagar%20station!5e0!3m2!1sen!2sin!4v1769689835953!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<?php

include('includes/foot.php');

?>