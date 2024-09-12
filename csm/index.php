<?php
session_start();
include 'dbconfig.php';
include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>CSM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dar px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0 d-flex align-items-center">
                    <img src="img/csulogo.png" alt="Logo" class="logo" />
                    <h1 class="m-0 ms-2">CSM</h1>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="#services" class="nav-item nav-link">Services</a>
                        <!-- <a href="#about" class="nav-item nav-link">About</a> -->
                    </div>
                    <a href="login.php" class="btn btn-light rounded-pill text-black py-2 px-4 ms-lg-5">Log in</a>
                </div>
            </nav>

            <div style="background-color: #dcb834" class="container-xxl hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">
                                Online Client Satisfaction Survey of Cagayan State University - PIAT Campus
                            </h1>
                            <p class="text-white pb-3 animated zoomIn">
                                Your feedback helps us improve our services and better meet your needs. Take a few
                                moments to share your experience, and together, we'll continue to grow. Your voice
                                matters—thank you for choosing us
                            </p>
                            <a href=""
                                class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Start
                                Survey</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero1.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Services Start -->
        <div id="services" class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/abouthero.png" />
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-darl px-4 mb-3">
                            About CSM
                        </div>
                        <h2 class="mb-4">
                            Comprehensive Feedback Solutions
                        </h2>
                        <p class="mb-4">
                            Our platform provides an all-in-one solution to collect, analyze, and act on client
                            feedback. Improve your services by understanding client satisfaction and addressing concerns
                            efficiently.Our platform provides an all-in-one solution to collect, analyze, and act on
                            client feedback. Improve your services by understanding client satisfaction and addressing
                            concerns efficiently.
                        </p>
                        <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-warning">
                                    <i class="fa fa-user-tie text-dark"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Real-Time Client Insights</h6>
                                    <span>Gain valuable insights from your clients instantly, helping you make
                                        data-driven decisions to enhance service quality.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-warning">
                                    <i class="fa fa-chart-line text-dark"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Customized Survey Experience</h6>
                                    <span>Tailor your surveys to suit the unique needs of your business, ensuring every
                                        question targets the right area of service improvement.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- About Starts -->
        <!-- 
        <div id="about" class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">
                        Our Services
                    </div>
                    <h2 class="mb-5">We Provide Features and Browsing Enhancement</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa-solid fa-1"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Customizable Interface</h5>
                                <span>Make Bit Browser truly yours. With flexible customization options, you can
                                    personalize the browser’s look and feel to match your style and needs. </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3"> Built-in Ad Blocker</h5>
                                <span>Enjoy an uninterrupted browsing experience. Bit Browser comes with an integrated
                                    ad blocker that removes unwanted ads, speeds up page loading, and reduces data
                                    consumptio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Seamless Cross-Device Sync</h5>
                                <span>Stay connected wherever you go. Bit Browser offers seamless syncing across all
                                    your devices, ensuring that your bookmarks, history, and settings are always
                                    up-to-date and accessible, whether you're on your phone, tablet, or desktop.</span>
                            </div>
                        </div>
                    </div> -->
        <!-- About Ends -->

        <div>
            <footer class="bg-body-tertiary text-center text-lg-start">
                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                    © CSM: 2024
                </div>
                <!-- Copyright -->
            </footer>
        </div>

        <!-- Back to Top -->
        <a href="#" style="background-color: #dcb834" class="btn btn-lg btn-lg-square back-to-top text-white"><i
                class="bi bi-arrow-up"></i></a>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>