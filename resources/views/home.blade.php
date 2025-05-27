@include('layout.header')
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
                        <a href="{{ url('/') }}"><img src="assets/img/logo/logo.png" alt="" style="height: 90px;" /></a>
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
                    <a href="#" class="header-btn1"><img src="assets/img/icon/call.png" alt="" /> 0768641275</a>
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
        <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Quality laundry service in Eldoret</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">FRESH. FAST. CLEAN</p>
                                    <a href="{{ url('/services') }}" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Explore Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
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
        <!-- Services End -->
        <!--? Offer-services Start  -->
        <section class="offer-services pb-5">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-xl-8 col-lg-9 text-center">
                        <div class="section-tittle">
                            <span class="element text-primary">Our Services</span>
                            <h2 class="fw-bold">What We Offer</h2>
                            <p class="text-muted">From laundry to ironing, we provide a full range of professional cleaning services tailored to your lifestyle.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Service 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0 text-center">
                            <img src="assets/img/gallery/laundry.png" class="card-img-top uniform-img" alt="Cloth Laundry" />
                            <div class="card-body">
                                <img src="assets/img/icon/offers-icon1.png" alt="" class="mb-3" style="height: 40px;" />
                                <h5 class="card-title fw-bold text-dark" style="font-size: 2.25rem;">Laundry and Dry cleaning</h5>
                                <p class="card-text text-muted">We offer fast, efficient, and affordable laundry and dry cleaning services using modern machines.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0 text-center">
                            <img src="assets/img/gallery/carpet.png" class="card-img-top uniform-img" alt="Cloth Ironing" />
                            <div class="card-body">
                                <img src="assets/img/icon/offers-icon2.png" alt="" class="mb-3" style="height: 40px;" />
                                <h5 class="card-title fw-bold text-dark" style="font-size: 2.25rem;">Carpet Cleaning</h5>
                                <p class="card-text text-muted">We provide deep, thorough, and affordable carpet cleaning services that leave your carpets fresh and spotless.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0 text-center">
                            <img src="assets/img/gallery/sofacleaning.jpg" class="card-img-top uniform-img" alt="Dry Cleaning" />
                            <div class="card-body">
                                <img src="assets/img/icon/offers-icon3.png" alt="" class="mb-3" style="height: 40px;" />
                                <h5 class="card-title fw-bold text-dark" style="font-size: 2.25rem;">Sofa Cleaning</h5>
                                <p class="card-text text-muted">Delicate dry-cleaning services to preserve the quality of your garments.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0 text-center">
                            <img src="assets/img/gallery/matresscleaning.jpg" class="card-img-top uniform-img" alt="Shoe Care" />
                            <div class="card-body">
                                <img src="assets/img/icon/shoe-icon.png" alt="" class="mb-3" style="height: 40px;" />
                                <h5 class="card-title fw-bold text-dark" style="font-size: 2.25rem;">Matress Cleaning</h5>
                                <p class="card-text text-muted">Restore the shine and comfort of your footwear with our professional shoe care services.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0 text-center">
                            <img src="assets/img/gallery/fumigation.png" class="card-img-top uniform-img" alt="Curtain Cleaning" />
                            <div class="card-body">
                                <img src="assets/img/icon/curtain-icon.png" alt="" class="mb-3" style="height: 40px;" />
                                <h5 class="card-title fw-bold text-dark" style="font-size: 2.25rem;">Fumigation & PestControl</h5>
                                <p class="card-text text-muted">We take care of your drapes and curtains, leaving them fresh, clean, and allergen-free.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0 text-center">
                            <img src="assets/img/gallery/ironing.png" class="card-img-top uniform-img" alt="Bedding & Duvets" />
                            <div class="card-body">
                                <img src="assets/img/icon/ironing.png" alt="" class="mb-3" style="height: 40px;" />
                                <h5 class="card-title fw-bold text-dark" style="font-size: 2.25rem;">Clothes Ironing</h5>
                                <p class="card-text text-muted">Enjoy fresh, hygienic sleep with our duvet and bed linen washing service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Offer-services End  -->
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

        <!-- Testimonials_end -->
        <!--? Company achievement Start -->
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
        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
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
                            <p class="mb-30">
                                Whether it’s daily laundry, delicate garments, or bulky items like duvets and carpets, we handle everything with care. Our team is dedicated to making laundry stress-free so you can focus on what matters
                                most.
                            </p>

                            <a href="{{ url('/about') }}" class="btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--?  Map Area start  -->
        <div class="Map-area">
            <img src="assets/img/post/post_11.png" alt="" class="w-100" />
        </div>
        <!-- Map Area End -->
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
                                    <li class="number"><a href="#">0768641275</a></li>
                                    <li><a href="#">laundry@567.com</a></li>
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
</body>

  <!-- Footer End-->
</footer> @include('layout.footer')
 