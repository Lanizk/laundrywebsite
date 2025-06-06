<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Cleanpoint Cleaning Solutions</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="manifest" href="site.webmanifest" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

        <!-- CSS here -->
         <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    </head>
    <body>
        <!-- ? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/logo3.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header header-sticky">
                    <!-- Logo -->
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="assets/img/logo/logo.png" alt="" style="height: 90px;"/></a>
                        </div>
                        <div class="menu-wrapper d-flex align-items-center">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="{{ request()->is('/') ? 'active' : '' }}">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="{{ request()->is('about') ? 'active' : '' }}">
                                            <a href="{{ url('/about') }}">About</a>
                                        </li>
                                        <li class="{{ request()->is('services') ? 'active' : '' }}">
                                            <a href="{{ url('/services') }}">Services</a>
                                        </li>
                                        <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                            <a href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-none d-lg-block">
                        <a href="#" class="header-btn1"><img src="assets/img/icon/call.png" alt="" />0700866400</a>
                        <a href="#" class="header-btn2">Make an Appointment</a>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        <main>
            <!--? Hero Start -->
            <div class="slider-area2 section-bg2 hero-overly" data-background="assets/img/hero/hero3.jpg">
                <div class="slider-height2 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap hero-cap2">
                                    <h2>About us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero End -->
<section class="services-area pt-top border-bottom pb-20 mb-60 ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="section-tittle text-center mb-55">
                                <span class="element">Our Process</span>
                                <h2>This is how we work</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/services-icon1.svg" alt="" />
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">We collect your clothes</a></h5>
                                    <p>Our team picks up your dirty laundry right from your doorstep at a time convenient for you. No hassle, no queues – just seamless service from start to finish.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/services-icon2.svg" alt="" />
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Wash your clothes</a></h5>
                                    <p>Your clothes are treated to a thorough, professional clean using modern machines and premium detergents – giving them a fresh, soft feel and a lasting fragrance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/services-icon3.svg" alt="" />
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Get delivery</a></h5>
                                    <p>Once cleaned, your laundry is neatly folded, carefully packaged, and delivered back to you – fresh, crisp, and ready to wear.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--? About Area  -->
            <section class="about-area2  mt-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img">
                                <img src="assets/img/gallery/about1.png" class="img-fluid w-100" style="height: 700px;" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-25">
                                    <h2>About company</h2>
                                </div>
                                <p class="mb-20">
                                    At Cleanpoint Laundry, we specialize in providing top-notch laundry and dry cleaning services designed for your convenience. With a commitment to hygiene, quality, and timely delivery, we use modern machines
                                and eco-friendly detergents to ensure your clothes come back spotless and fresh.
                                </p>
                                <p class="mb-30">Whether it’s daily laundry, delicate garments, or bulky items like duvets and carpets, we handle everything with care. Our team is dedicated to making laundry stress-free so you can focus on what matters
                                most.</p>

                                <a href="{{ url('/about') }}" class="btn">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services End -->
            
            <!--? About Area  -->
            <section class="services-area section-padding40 fix">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="section-tittle text-center mb-55">
                                <span class="element">Fun Fact</span>
                                <h2>Company achievement</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center">
                                <div class="cat-cap">
                                    <span>400+</span>
                                    <p>We’ve served over 400 satisfied clients with reliable, professional laundry care.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center">
                                <div class="cat-cap">
                                    <span>70+</span>
                                    <p>70+ local businesses trust us with their bulk and sensitive laundry needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center">
                                <div class="cat-cap">
                                    <span>95%</span>
                                    <p>Customer satisfaction rate based on feedback, reviews, and returning customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bottom-bt">
                                    <img src="assets/img/gallery/company-bg.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Company achievement End -->
            <!--? Want To work -->
            <section class="container">
                <section class="wantToWork-area" data-background="assets/img/gallery/section_bg01.png">
                    <div class="wants-wrapper w-padding2">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-8 col-lg-9 col-md-7">
                                <div class="wantToWork-caption wantToWork-caption2">
                                    <h2>Call us for a service</h2>
                                    <p>We deliver the goods to the most complicated places on earth</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-5">
                                <a href="#" class="btn wantToWork-btn"><img src="assets/img/icon/call2.png" alt="" /> Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <!-- Want To work End -->
           
        </main>
       <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="{{ url('/') }}"><img src="assets/img/logo/logo2_footer.png" style="height: 90px;" alt="" /></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>We deliver professional laundry and dry cleaning with care, ensuring your clothes look and feel brand new.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="https://www.tiktok.com/@cleaningsolutions001?_t=ZM-8wgVFZVijvJ&_r=1"><i class="fab fa-tiktok"></i></a>
                                    <a href="https://www.facebook.com/share/p/19Hboydezy/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/cleanpointcleaningsolutions?utm_source=qr&igsh=aDZ2a2dwdzZkMXJl"><i class="fab fa-instagram"></i></a>
                                    <a href="https://wa.me/254700866400" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="#">- Laundry and Dry cleaning</a></li>
                                    <li><a href="#">- Carpet Cleaning</a></li>
                                    <li><a href="#">- Sofa Cleaning</a></li>
                                    <li><a href="#">- Matress Cleaning</a></li>
                                    <li><a href="#">- Fumigation and PestControl</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Get in touch</h4>
                                <ul>
                                    <li class="number"><a href="#">0768641275/ 0700866400 </a></li>
                                    <li><a href="#">cleanpointcleaningsolutionsltd@gmail.com</a></li>
                                    <li><a href="#">Peris and Langas, Eldoret, Kenya</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area section-bg2" data-background="assets/img/gallery/footer-bg.png">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by allanmurimi96@gmail.com
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- Scroll Up -->
        <div id="back-top">
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>

        <!-- JS here -->

        <script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('./assets/js/popper.min.js')}}"></script>
        <script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('./assets/js/slick.min.js')}}"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="{{asset('./assets/js/wow.min.js')}}"></script>
        <script src="{{asset('./assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Date Picker -->
        <script src="{{asset('./assets/js/gijgo.min.js')}}"></script>
        <!-- Nice-select, sticky -->
        <script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
        <!-- Progress -->
        <script src="{{asset('./assets/js/jquery.barfiller.js')}}"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src="{{asset('./assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('./assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('./assets/js/hover-direction-snake.min.js')}}"></script>

        <!-- contact js -->
        <script src="{{asset('./assets/js/contact.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('./assets/js/mail-script.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="{{asset('./assets/js/plugins.js')}}"></script>
        <script src="{{asset('./assets/js/main.js')}}"></script>
    </body>
</html>
