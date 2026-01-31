<?php

   include('includes/head.php');

   include('includes/heroSection.php');

?>

                <!-- Brand Section Start -->
                <div class="brand-section section-padding fix">
                    <div class="container">
                        <div class="top-text text-center">
                            <div class="line-1"></div>
                            <p>We are trusted by brands across all industries</p>
                             <div class="line-1"></div>
                        </div>
                        <div class="swiper brand-slider">
                            <div class="swiper-wrapper">
                                <!-- <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client1.jpg" alt="img">
                                    </div>
                                </div> -->
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client2.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client3.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client4.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client5.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client6.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client7.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client8.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client9.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image text-center">
                                        <img src="assets/img/clients/client10.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Section Start -->
                <section class="about-section section-padding fix pt-0">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="about-image-items-style-1">
                                    <div class="section-title mb-0">
                                        <h6 class="sub-title wow fadeInUp"><img src="assets/img/sub-title-1.svg" alt="img">ABOUT COMPANY</h6>
                                    </div>
                                    <div class="about-image wow fadeInUp" data-wow-delay=".2s">
                                        <img src="assets/img/home-1/about/about-01.png" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="about-content-style-1">
                                    <div class="section-title mb-0">
                                        <h2 class="text_invert-2">Welcome to <?= $companyTitle ?></h2>
                                        <p><?= $companyTitle ?> is a leader in the renewable energy sector, dedicated to transforming how the world consumes power. With a focus on high-efficiency N-Type modules / solar cells, we aim to provide reliable, affordable, and innovative energy solutions to homeowners and businesses alike. </p>
                                    </div>
                                    <div class="list-items">
                                        <ul class="wow fadeInUp" data-wow-delay=".2s">
                                            <li>
                                                <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                24/7 Customer Support
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                Lower Energy Costs
                                            </li>
                                        </ul>
                                        <ul class="wow fadeInUp" data-wow-delay=".4s">
                                            <li>
                                                <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                Expert Team Members
                                            </li>
                                            <li>
                                                <img src="assets/img/home-1/about/check-icon.svg" alt="img">
                                                Energy Independence
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-items">
                                        <div class="icon-box-items wow fadeInUp" data-wow-delay=".6s">
                                            <div class="icon">
                                                <img src="assets/img/home-1/about/icon-1.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h2><span class="count">1000</span>+</h2>
                                                <p>Happy Clients</p>
                                            </div>
                                        </div>
                                        <div class="icon-box-items wow fadeInUp" data-wow-delay=".8s">
                                            <div class="icon">
                                                <img src="assets/img/home-1/about/icon-2.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h2><span class="count">20</span>+</h2>
                                                <p>Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="about.php" class="theme-btn wow fadeInUp" data-wow-delay=".9s">
                                        More About Us
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Service Section Start -->
                <section class="service-section section-padding fix section-bg">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <div class="service-content-style-1">
                                    <div class="section-title mb-0">
                                        <h6 class="sub-title wow fadeInUp"><img src="assets/img/sub-title-1.svg" alt="img">OUR SERVICES</h6>
                                        <h2 class="text-anim">Complete solar solution with repair services</h2>
                                    </div>
                                    <a href="service.php" class="theme-btn wow fadeInUp" data-wow-delay=".2s">
                                    View Our Services
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <ul class="service-box-style-1">
                                    <li class="wow fadeInUp" data-wow-delay=".2s">
                                        <div class="first-text">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M30.447 45.6886H24.4375C24.0078 45.6886 23.6202 45.4298 23.4557 45.0324C23.2913 44.6355 23.3822 44.1786 23.6861 43.8745L38.5611 28.9996C38.9053 28.6552 39.4396 28.5891 39.8573 28.8384C40.2751 29.0883 40.4702 29.5899 40.3304 30.0563L37.553 39.3135H43.5625C43.9922 39.3135 44.3798 39.5723 44.5442 39.9691C44.7087 40.3666 44.6178 40.8235 44.3139 41.127L29.4389 56.0025C29.0946 56.3464 28.5604 56.4124 28.1426 56.1631C27.7249 55.9132 27.5298 55.4117 27.6696 54.9458L30.447 45.6886ZM37.0838 33.4822L27.0028 43.5634H31.875C32.2107 43.5634 32.5269 43.7222 32.7275 43.9918C32.9277 44.2613 32.9893 44.6093 32.8929 44.9312L30.9162 51.5193L40.9972 41.4381H36.125C35.7892 41.4381 35.473 41.2799 35.2724 41.0103C35.0723 40.7408 35.0106 40.3922 35.1071 40.0703L37.0838 33.4822Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M30.447 45.6886H24.4375C24.0078 45.6886 23.6202 45.4298 23.4557 45.0324C23.2913 44.6355 23.3822 44.1786 23.6861 43.8745L38.5611 28.9996C38.9053 28.6552 39.4396 28.5891 39.8573 28.8384C40.2751 29.0883 40.4702 29.5899 40.3304 30.0563L37.553 39.3135H43.5625C43.9922 39.3135 44.3798 39.5723 44.5442 39.9691C44.7087 40.3666 44.6178 40.8235 44.3139 41.127L29.4389 56.0025C29.0946 56.3464 28.5604 56.4124 28.1426 56.1631C27.7249 55.9132 27.5298 55.4117 27.6696 54.9458L30.447 45.6886ZM37.0838 33.4822L27.0028 43.5634H31.875C32.2107 43.5634 32.5269 43.7222 32.7275 43.9918C32.9277 44.2613 32.9893 44.6093 32.8929 44.9312L30.9162 51.5193L40.9972 41.4381H36.125C35.7892 41.4381 35.473 41.2799 35.2724 41.0103C35.0723 40.7408 35.0106 40.3922 35.1071 40.0703L37.0838 33.4822Z" fill="black" fill-opacity="0.2"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8125 54.1877C13.5307 54.1877 13.2605 54.0758 13.0612 53.8765C12.8619 53.6773 12.75 53.407 12.75 53.1252C12.75 52.8435 12.8619 52.5732 13.0612 52.3739C13.2605 52.1747 13.5307 52.0627 13.8125 52.0627C14.0943 52.0627 14.3645 52.1747 14.5638 52.3739C14.7631 52.5732 14.875 52.8435 14.875 53.1252C14.875 53.407 14.7631 53.6773 14.5638 53.8765C14.3645 54.0758 14.0943 54.1877 13.8125 54.1877Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8125 54.1877C13.5307 54.1877 13.2605 54.0758 13.0612 53.8765C12.8619 53.6773 12.75 53.407 12.75 53.1252C12.75 52.8435 12.8619 52.5732 13.0612 52.3739C13.2605 52.1747 13.5307 52.0627 13.8125 52.0627C14.0943 52.0627 14.3645 52.1747 14.5638 52.3739C14.7631 52.5732 14.875 52.8435 14.875 53.1252C14.875 53.407 14.7631 53.6773 14.5638 53.8765C14.3645 54.0758 14.0943 54.1877 13.8125 54.1877Z" fill="black" fill-opacity="0.2"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M54.1875 54.1877C53.9057 54.1877 53.6355 54.0758 53.4362 53.8765C53.2369 53.6773 53.125 53.407 53.125 53.1252C53.125 52.8435 53.2369 52.5732 53.4362 52.3739C53.6355 52.1747 53.9057 52.0627 54.1875 52.0627C54.4693 52.0627 54.7395 52.1747 54.9388 52.3739C55.1381 52.5732 55.25 52.8435 55.25 53.1252C55.25 53.407 55.1381 53.6773 54.9388 53.8765C54.7395 54.0758 54.4693 54.1877 54.1875 54.1877Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M54.1875 54.1877C53.9057 54.1877 53.6355 54.0758 53.4362 53.8765C53.2369 53.6773 53.125 53.407 53.125 53.1252C53.125 52.8435 53.2369 52.5732 53.4362 52.3739C53.6355 52.1747 53.9057 52.0627 54.1875 52.0627C54.4693 52.0627 54.7395 52.1747 54.9388 52.3739C55.1381 52.5732 55.25 52.8435 55.25 53.1252C55.25 53.407 55.1381 53.6773 54.9388 53.8765C54.7395 54.0758 54.4693 54.1877 54.1875 54.1877Z" fill="black" fill-opacity="0.2"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.751 44.625V48.875C12.751 49.4613 13.227 49.9375 13.8135 49.9375C14.4 49.9375 14.876 49.4613 14.876 48.875V44.625C14.876 44.0385 14.4 43.5625 13.8135 43.5625C13.227 43.5625 12.751 44.0385 12.751 44.625Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.751 44.625V48.875C12.751 49.4613 13.227 49.9375 13.8135 49.9375C14.4 49.9375 14.876 49.4613 14.876 48.875V44.625C14.876 44.0385 14.4 43.5625 13.8135 43.5625C13.227 43.5625 12.751 44.0385 12.751 44.625Z" fill="black" fill-opacity="0.2"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M53.126 44.625V48.875C53.126 49.4613 53.602 49.9375 54.1885 49.9375C54.775 49.9375 55.251 49.4613 55.251 48.875V44.625C55.251 44.0385 54.775 43.5625 54.1885 43.5625C53.602 43.5625 53.126 44.0385 53.126 44.625Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M53.126 44.625V48.875C53.126 49.4613 53.602 49.9375 54.1885 49.9375C54.775 49.9375 55.251 49.4613 55.251 48.875V44.625C55.251 44.0385 54.775 43.5625 54.1885 43.5625C53.602 43.5625 53.126 44.0385 53.126 44.625Z" fill="black" fill-opacity="0.2"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 35.0618H10.625C10.1958 35.0618 9.80796 34.8025 9.64327 34.4062C9.47858 34.0088 9.56996 33.552 9.87383 33.2481L31.1238 11.9981C31.3225 11.7983 31.5935 11.6868 31.875 11.6868H36.125C36.4066 11.6868 36.6775 11.7983 36.8762 11.9981L44.625 19.7469V13.8128H43.5625C42.976 13.8128 42.5 13.3368 42.5 12.7503C42.5 12.1638 42.976 11.6878 43.5625 11.6878H52.0625C52.649 11.6878 53.125 12.1638 53.125 12.7503C53.125 13.3368 52.649 13.8128 52.0625 13.8128H51V26.1219L58.1262 33.2481C58.4301 33.552 58.5215 34.0088 58.3568 34.4062C58.1921 34.8025 57.8043 35.0618 57.375 35.0618H51V51.0003C51 51.8461 50.6643 52.6568 50.0661 53.2539C49.469 53.8521 48.6583 54.1878 47.8125 54.1878H36.125C35.5385 54.1878 35.0625 53.7118 35.0625 53.1253C35.0625 52.5388 35.5385 52.0628 36.125 52.0628H47.8125C48.0941 52.0628 48.365 51.9513 48.5637 51.7515C48.7635 51.5528 48.875 51.2819 48.875 51.0003V33.3766L34 18.5016L19.125 33.3766V51.0003C19.125 51.2819 19.2366 51.5528 19.4363 51.7515C19.635 51.9513 19.906 52.0628 20.1875 52.0628H24.4375C25.024 52.0628 25.5 52.5388 25.5 53.1253C25.5 53.7118 25.024 54.1878 24.4375 54.1878C22.7471 54.1878 21.284 54.1878 20.1875 54.1878C19.3418 54.1878 18.5311 53.8521 17.934 53.2539C17.3358 52.6568 17 51.8461 17 51.0003V35.0618ZM51.4399 32.9368H54.8101L35.6851 13.8118H32.3149L13.1899 32.9368H16.5601L33.2488 16.2481C33.6632 15.8326 34.3368 15.8326 34.7512 16.2481L51.4399 32.9368ZM46.75 21.8719L48.875 23.9969V13.8128H46.75V21.8719Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 35.0618H10.625C10.1958 35.0618 9.80796 34.8025 9.64327 34.4062C9.47858 34.0088 9.56996 33.552 9.87383 33.2481L31.1238 11.9981C31.3225 11.7983 31.5935 11.6868 31.875 11.6868H36.125C36.4066 11.6868 36.6775 11.7983 36.8762 11.9981L44.625 19.7469V13.8128H43.5625C42.976 13.8128 42.5 13.3368 42.5 12.7503C42.5 12.1638 42.976 11.6878 43.5625 11.6878H52.0625C52.649 11.6878 53.125 12.1638 53.125 12.7503C53.125 13.3368 52.649 13.8128 52.0625 13.8128H51V26.1219L58.1262 33.2481C58.4301 33.552 58.5215 34.0088 58.3568 34.4062C58.1921 34.8025 57.8043 35.0618 57.375 35.0618H51V51.0003C51 51.8461 50.6643 52.6568 50.0661 53.2539C49.469 53.8521 48.6583 54.1878 47.8125 54.1878H36.125C35.5385 54.1878 35.0625 53.7118 35.0625 53.1253C35.0625 52.5388 35.5385 52.0628 36.125 52.0628H47.8125C48.0941 52.0628 48.365 51.9513 48.5637 51.7515C48.7635 51.5528 48.875 51.2819 48.875 51.0003V33.3766L34 18.5016L19.125 33.3766V51.0003C19.125 51.2819 19.2366 51.5528 19.4363 51.7515C19.635 51.9513 19.906 52.0628 20.1875 52.0628H24.4375C25.024 52.0628 25.5 52.5388 25.5 53.1253C25.5 53.7118 25.024 54.1878 24.4375 54.1878C22.7471 54.1878 21.284 54.1878 20.1875 54.1878C19.3418 54.1878 18.5311 53.8521 17.934 53.2539C17.3358 52.6568 17 51.8461 17 51.0003V35.0618ZM51.4399 32.9368H54.8101L35.6851 13.8118H32.3149L13.1899 32.9368H16.5601L33.2488 16.2481C33.6632 15.8326 34.3368 15.8326 34.7512 16.2481L51.4399 32.9368ZM46.75 21.8719L48.875 23.9969V13.8128H46.75V21.8719Z" fill="black" fill-opacity="0.2"/>
                                                </svg>
                                            </div>
                                            <h3><a href="javascript:void(0)">Renewable Energy</a></h3>
                                        </div>
                                        <a href="javascript:void(0)" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s">
                                        <div class="first-text">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M47.812 21.2498H44.6245C44.2063 21.2498 43.8266 21.0044 43.6555 20.6229C43.4838 20.2409 43.5523 19.7942 43.8306 19.4814L52.3306 9.9192C52.6235 9.58944 53.0899 9.4752 53.5019 9.63183C53.9144 9.78845 54.187 10.1838 54.187 10.6251V17H57.3745C57.7927 17 58.1723 17.2454 58.3435 17.6274C58.5152 18.0089 58.4466 18.4556 58.1684 18.7684L49.6684 28.3306C49.3754 28.6604 48.909 28.775 48.4971 28.618C48.0845 28.4613 47.812 28.066 47.812 27.6251V21.2498ZM52.062 13.4194L46.9903 19.1249H48.8745C49.4615 19.1249 49.937 19.6006 49.937 20.1874V24.8304L55.0086 19.1249H53.1245C52.5374 19.1249 52.062 18.6492 52.062 18.0624V13.4194Z" fill="#091613"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.7496 62.6875V48.875C29.7496 47.9304 30.1598 47.0826 30.8121 46.4992V40.2199L10.9041 45.6503C10.4387 45.7767 9.9457 45.5738 9.70451 45.1562C9.46332 44.7387 9.53345 44.2106 9.87663 43.8706L24.7038 29.1762C24.9344 28.9478 25.2563 28.8373 25.5783 28.8756L29.3374 29.3282C29.5648 28.9128 29.8474 28.5302 30.1736 28.1903L27.8371 25.075C27.6427 24.8158 27.5768 24.4811 27.6597 24.1676L32.9722 3.98013C33.0954 3.51263 33.5173 3.1875 33.9996 3.1875C34.482 3.1875 34.9038 3.51263 35.0271 3.98013L40.3396 24.1676C40.4224 24.4811 40.3566 24.8158 40.1621 25.075L37.8257 28.1903C38.1519 28.5302 38.4345 28.9128 38.6619 29.3282L42.421 28.8756C42.7429 28.8373 43.0649 28.9478 43.2954 29.1762L58.1226 43.8706C58.4658 44.2106 58.5359 44.7387 58.2948 45.1562C58.0536 45.5738 57.5606 45.7767 57.0952 45.6503L37.1871 40.2199V46.4992C37.8395 47.0826 38.2496 47.9304 38.2496 48.875V62.6875H61.6246C62.2111 62.6875 62.6871 63.1635 62.6871 63.75C62.6871 64.3365 62.2111 64.8125 61.6246 64.8125H6.37463C5.78813 64.8125 5.31213 64.3365 5.31213 63.75C5.31213 63.1635 5.78813 62.6875 6.37463 62.6875H29.7496ZM36.1246 62.6875V48.875C36.1246 48.2885 35.6486 47.8125 35.0621 47.8125C34.3779 47.8125 33.6214 47.8125 32.9371 47.8125C32.3506 47.8125 31.8746 48.2885 31.8746 48.875V62.6875H36.1246ZM35.0621 37.0813C34.7189 37.1503 34.363 37.1875 33.9996 37.1875C33.6363 37.1875 33.2803 37.1503 32.9371 37.0813V45.6875H35.0621V37.0813ZM39.2909 31.3926C39.3047 31.552 39.3121 31.7124 39.3121 31.875C39.3121 33.6388 38.4504 35.2028 37.1255 36.1696L38.0106 38.2426L53.7589 42.5372L42.1649 31.0473L39.2909 31.3926ZM28.7084 31.3926L25.8343 31.0473L14.2403 42.5372L29.9887 38.2426L30.8738 36.1696C29.5488 35.2028 28.6871 33.6388 28.6871 31.875C28.6871 31.7124 28.6946 31.552 28.7084 31.3926ZM33.9996 28.6875C35.7591 28.6875 37.1871 30.1155 37.1871 31.875C37.1871 33.6345 35.7591 35.0625 33.9996 35.0625C32.2401 35.0625 30.8121 33.6345 30.8121 31.875C30.8121 30.1155 32.2401 28.6875 33.9996 28.6875ZM36.0747 26.9832L38.154 24.2112L33.9996 8.42456L29.8453 24.2112L31.9246 26.9832C32.5621 26.7123 33.2633 26.5625 33.9996 26.5625C34.7359 26.5625 35.4372 26.7123 36.0747 26.9832Z" fill="#091613"/>
                                                </svg>
                                            </div>
                                            <h3><a href="javascript:void(0)">Solar Maintenance</a></h3>
                                        </div>
                                        <a href="javascript:void(0)" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="service-image fix">
                        <img data-speed=".8" src="img/home-1/service/service-01.jpg" alt="img">
                    </div> -->
                </section>

                <!-- Choose Us Section Start -->
                <section class="choose-us-section section-padding fix">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="choose-image-style-1 fix">
                                    <img data-speed=".8" src="assets/img/indian-solar.avif" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="choose-content-style-1">
                                    <div class="section-title mb-0">
                                        <h6 class="sub-title wow fadeInUp"><img src="assets/img/sub-title-1.svg" alt="img">WHY CHOOSE US</h6>
                                        <!-- <h2 class="text-anim">Ecoly believes in sustainable energy practices</h2> -->
                                    </div>
                                    <ul class="nav mt-1 pb-1">
                                        <li class="nav-item wow fadeInUp show active" data-wow-delay=".4s">
                                            <a href="#Mission" data-bs-toggle="tab" class="nav-link">
                                            Our Mission
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="Mission" class="tab-pane fade show active">
                                            <p class="choose-text">We at <?= $companyTitle ?> are focused towards contributing to national and global solar transition targets. With extensive experience is commissioning ground mounted and rooftop projects ...</p>
                                            <div class="bottom-items">
                                                <a href="whyChooseUs.php" class="theme-btn">
                                                    Read More
                                                    <i class="fa-solid fa-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


<?php

include('includes/videoSection.php');
include('includes/testimonialSection.php');
include('includes/foot.php');

?>