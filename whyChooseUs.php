<?php

    $pageTitle = 'Why Choose Us';
    
   include('includes/head.php');

   include('includes/breadcrumb.php');

?>

                <!-- Choose Us Section Start -->
                <section class="choose-us-section section-padding fix">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="choose-image-style-1 fix">
                                    <img data-speed=".8" src="assets/img/indian-solar-2.jpg" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="choose-content-style-1">
                                    <div class="section-title mb-0">
                                        <!-- <h6 class="sub-title wow fadeInUp"><img src="assets/img/sub-title-1.svg" alt="img">WHY CHOOSE US</h6> -->
                                        <h2 class="text-anim">Most qualified solar professionals</h2>
                                        <p>We're grateful to work with a diverse global clientele, delivering dependable, high-quality solar solutions tailored to unique needs. Our focus on collaboration, quality, and long-term impact helps us build lasting partnerships and contribute to a more sustainable future, one project at a time.</p>
                                    </div>
                                    <ul class="nav">
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                                            <a href="#About" data-bs-toggle="tab" class="nav-link active">
                                            About Us
                                            </a>
                                        </li>
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                                            <a href="#Mission" data-bs-toggle="tab" class="nav-link">
                                            Our Mission
                                            </a>
                                        </li>
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                                            <a href="#Vision" data-bs-toggle="tab" class="nav-link">
                                            Our Vision
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="About" class="tab-pane fade show active">
                                            <p class="choose-text wow fadeInUp" data-wow-delay=".2s">With state-of-the-art manufacturing facilities in India, and 10,000+ successful project executions, we combine proven expertise with world-class execution. Backed by robust R&D, industry-first innovations, and a deep commitment to sustainability, Waaree continues to power a cleaner, greener, and more resilient future.</p>
                                                <div class="icon-box-items wow fadeInUp" data-wow-delay=".4s">
                                                    <div class="icon">
                                                        <img src="assets/img/home-1/choose/icon-1.svg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Modern Technology</h4>
                                                        <p>People in more ways every day, so that all of us can be part of the changing energy system.</p>
                                                    </div>
                                                </div>
                                                <div class="list-items wow fadeInUp" data-wow-delay=".6s">
                                                    <ul>
                                                        <li>
                                                            <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                            Expert Installation
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                            Battery Storage Solutions
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom-items wow fadeInUp" data-wow-delay=".8s">
                                                    <a href="contact.php" class="theme-btn wow fadeInUp" data-wow-delay=".4s">
                                                        Learn More
                                                        <i class="fa-solid fa-arrow-up-right"></i>
                                                    </a>
                                                    <div class="phone-box-items">
                                                        <div class="icon">
                                                            <i class="fa-thin fa-circle-phone"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p>Talk To Us</p>
                                                            <a href="tel:+91 <?= $phone ?>">(+91) <?= $phone ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="Mission" class="tab-pane fade">
                                            <p class="choose-text">We at <?= $companyTitle ?> are focused towards contributing to national and global solar transition targets. With extensive experience is commissioning ground mounted and rooftop projects for Government and private entities, in utility, health, education, industry and consumer sectors, and impressive portfolio of advanced technology modules we are advancing in creating climate for change.</p>
                                            <div class="icon-box-items">
                                                <div class="icon">
                                                    <img src="assets/img/home-1/choose/icon-1.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h4>Modern Technology</h4>
                                                    <p>People in more ways every day, so that all of us can be part of the changing energy system.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <ul>
                                                    <li>
                                                        <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                        Expert Installation
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                        Battery Storage Solutions
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bottom-items">
                                                <a href="about.php" class="theme-btn">
                                                    Discover More
                                                    <i class="fa-solid fa-arrow-up-right"></i>
                                                </a>
                                                <div class="phone-box-items">
                                                    <div class="icon">
                                                        <i class="fa-thin fa-circle-phone"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>Talk To Us</p>
                                                        <a href="tel:+91 <?= $phone ?>">(+91) <?= $phone ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Vision" class="tab-pane fade">
                                            <p class="choose-text">Our vision is to make sustainable energy accessible and affordable across emerging markets by delivering high-quality Renewable Solutions that reduce carbon emissions and enhance lives through a cleaner, brighter future.</p>
                                    <div class="icon-box-items">
                                        <div class="icon">
                                            <img src="assets/img/home-1/choose/icon-1.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h4>Modern Technology</h4>
                                            <p>People in more ways every day, so that all of us can be part of the changing energy system.</p>
                                        </div>
                                    </div>
                                    <div class="list-items">
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                Expert Installation
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                Battery Storage Solutions
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-items">
                                        <a href="about.php" class="theme-btn">
                                            Discover More
                                            <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                        <div class="phone-box-items">
                                            <div class="icon">
                                                <i class="fa-thin fa-circle-phone"></i>
                                            </div>
                                            <div class="content">
                                                <p>Talk To Us</p>
                                                <a href="tel:+91 <?= $phone ?>">(+91) <?= $phone ?></a>
                                            </div>
                                        </div>
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