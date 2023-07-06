<?php
require './inc/head.php';
require './inc/navbar.php';
?>

<main class="mt-4 py-5">
    <header class="d-flex align-items-center">
        <div class="container">
            <div class="col-lg-10 col-md-12">
                <h1 class="text-white title">
                    MaxExpress<br>Service Company
                </h1>
                <!-- form -->
                <form action="./track-package.php" class="search-bo" method="POST">
                    <input type="text" class="form-input" name="tracking_no" id="tracking_no" placeholder="Enter Your Tracking Number" required>

                    <input type="submit" name="track-package" class="btn btn-md btn-warning" value="Track and Trace">
                </form>
                <div class="">
                    <p class="text-white text-uppercase fst-italic">For order status inquiry</p>
                </div>

            </div>
        </div>
    </header>

    <section class="gray-bg py-5">
        <div class="container">
            <div class="row m-0 text-dark align-items-center">
                <p class="m-0">Shoot us a mail</p>
                <div class="col-lg-5 col-md-6 black-color mb-3 d-flex align-items-center">
                    <span class="las la-envelope la-3x theme-color"></span>
                    <h5><a href="mailto:Support@maxexpresservice.com" class="text-dark">Support@maxexpresservice.com</a></h5>
                </div>
                <div class="col-lg-4 col-md-6 black-color mb-3 d-flex align-items-center">
                    <span class="las la-clock la-3x theme-color"></span>
                    <h5 class="text-dark m-0">Mon - Sat 8.00 - 20.00</h5>
                </div>
                <div class="col-lg-3 col-md-6 black-color mb-3 d-flex align-items-center">
                    <span class="las la-map la-3x theme-color"></span>
                    <h5 class="text-dark m-0"></h5>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 py-5" id="services">
        <div class="container text-center">
            <h6 class="theme-color">Our Services</h6>
            <h1>What We Can Do For You</h1>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4 card-box" data-aos="flip-right">
                    <div class="card py-5">
                        <div class="card-body">
                            <i class="las la-truck theme-color la-3x py-4"></i>
                            <h3 class="card-title">Land Transport</h3>
                            <p class="card-text py-4">We have the latest fleet of advanced green carriers that provides high fuel efficiency, expert and licensed team of drivers, expert team of technicians and logistic support team, and so on.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 card-box" data-aos="fade-down-left">
                    <div class="card py-5">
                        <div class="card-body">
                            <i class="las la-ship theme-color la-3x py-4"></i>
                            <h3 class="card-title">Ship Transport</h3>
                            <p class="card-text py-4">The sea freight service has grown considerably in recent years. We ship everywhere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 card-box" data-aos="flip-left">
                    <div class="card py-5">
                        <div class="card-body">
                            <i class="las la-plane theme-color la-3x py-4"></i>
                            <h3 class="card-title">Air Transport</h3>
                            <p class="card-text py-4">We have air-planes as well as third party business associates that make planes available to deliver consignments to customers destination. We go everywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 py-5" id="about">
        <div class="container text-start">
            <div class="d-lg-flex flex-lg-row row flex-column-reverse m-0">
                <div class="col-lg-7 col-md-12">
                    <h6 class="theme-color">About Our Company</h6>
                    <h1>Safe Logistic & Transport Solutions That Saves Our Valuable Time!</h1>
                    <p>Are you still worrying about Lost cargo, delayed deliveries, or inflated logistics costs when your business is expanding international trade with United Nation deliver agency? The sound approach that you need to do is to choose a United Nation deliver agency shipping agency！
                        A forwarding agency could not only work to avoid problems but also to make the transportation process better, faster, and more efficient… MaxExpress Service Company is abbreviated for full information control, which is a new and innovative logistics philosophy. As an experienced logistics company founded in 1950, MaxExpress Service Company has kept providing freight services for the international trade companies all over the world.
                        When your cargo comes to shipping from United Nation deliver agency, Global Security Warhouse has been proud of this freight forwarding industry and our expertise is in providing ocean cargo services from United Nation deliver agency for small and medium companies as well as individuals all over the world.</p>

                    <p>Our mission has always been very simple, which is taking care of our customers and offering them worry-free forwarding service with competitive rates.</p>

                    <p>We integrate, you communicate.
                        We do better so you gain more</p>

                    <p>Have a look at what Global Security Warhouse can offer and if you have any suggestions on our services, please don’t hesitate to let us know.</p>

                    <a href="mailto:Support@maxexpresservice.com" class="btn btn-sm text-white">click to know more about us</a>
                </div>

                <div class="col-lg-5 col-md-12 mb-3">
                    <img src="./assets/img/gallery/about2.png" class="img-fluid w-100" alt="about-image">
                </div>
            </div>
        </div>
    </section>

    <section class="valued-service pt-5 mt-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12"></div>
                <div class="col-lg-8 col-md-12">
                    <div class="card p-lg-5 p-2">
                        <div class="card-body px-lg-2 px-1">
                            <h6 class="theme-color py-3 m-0">We Pride In</h6>
                            <h1 class="py-3 m-0">OUR VALUED SERVICES</h1>
                            <p>Lowering costs and outsourcing logistics would lead to lowering the overhead costs associated with maintaining a fleet of carriers, manpower on company’s payroll, warehousing maintenance and related taxes, processing charges, equipment costs, cross docking expenses, and so on.</p>

                            <p class="m-0">Our logistics service ensures you best quality services at all times, and our customer support is second to none, ensuring you stay updated with the entire process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimony-bg py-5 mb-5 d-flex align-items-center">
        <div class="container py-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-12">
                    <h6 class="theme-color">Clients Testimonials</h6>
                    <h1 class="pt-3 pb-2 text-white">What Our Clients Say!</h1>

                    <div class="container">
                        <div class=" slider-wrapper">
                            <div class="testimony">
                                <p class="text-white-50">They're best at what they do. Keep propelling y'all.</p>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/img/gallery/c2.jpg" alt="" class="img-fluid slider-image">
                                    <div class="ms-3">
                                        <small class="text-white m-0 d-block">Rita Smith</small>
                                        <small class="text-white-50">Mini Importer</small>
                                    </div>
                                </div>
                            </div>

                            <div class="testimony">
                                <p class="text-white-50">They are affordable, yet credible. Keep the good work fella.</p>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/img/gallery/c1.jpg" alt="" class="img-fluid slider-image">
                                    <div class="ms-3">
                                        <small class="text-white m-0 d-block">Edward Stones</small>
                                        <small class="text-white-50">Dropshipper</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 d-none d-lg-flex justify-content-between align-items-center">
                            <i class="la-1x p-2 las la-angle-left prev"></i>
                            <i class="la-1x p-2 las la-angle-right next"></i>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="card text-left">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="text-center p-5">Always Listening, Always Understanding.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt- py-5 photo-credit" id="">
        <div class="container text-center">
            <h6 class="theme-color">Photo Credits</h6>
            <h1 class="text-uppercase">Our Utilities</h1>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0">
                        <img src="./assets/img/gallery/blog01.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0">
                        <img src="./assets/img/gallery/blog1.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0">
                        <img src="./assets/img/gallery/blog02.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require './inc/footer.php' ?>