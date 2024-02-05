<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Steel Management</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet" />
</head>

<body class="sub_page">
    <div class="hero_area">

        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid header_top_container">
                    <a class="navbar-brand " href="index.html"> <img src="./images/logo.png" alt> </a>
                    <div class="contact_nav">
                        <a href>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>
                        <a href>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +0123456789
                            </span>
                        </a>
                        <a href>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                demo@gmail.com
                            </span>
                        </a>
                    </div>
                    <div class="social_box">
                        <a href>
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href>
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href>
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href>
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand navbar_brand_mobile" href="index.html">
                            <img src="./images/logo.png" alt />
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('user.welcome')}}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.about') }}">About us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Service</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{route('user.steel') }}">Special Steel</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('user.iron')}}">Iron Making</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('user.ferro') }}">Ferro Alloy</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('user.bars') }}">Round Bars</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('user.wire') }}">Wire Rods</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('user.oxygen') }}">Oxygen</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.contact') }}">Contact Us</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>
                                            Login
                                        </span>
                                    </a>
                                </li>
                                <form class="form-inline">
                                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
    </div>
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 ">About Us</h1>

        </div>
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>About <span>Steel Management</span></h2>
                        </div>
                        <p>
                            Steel manufacturing involves a series of processes that
                            transform raw materials into finished steel products. The two
                            primary methods of steel production are the Basic Oxygen Furnace
                            (BOF) process and the Electric Arc Furnace (EAF) process. Here's
                            an overview of each process:
                        </p>
                        
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="{{ asset('frontend/assets/images/right.png')}}" alt data-lightbox="about" />

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="service_section layout_padding">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>Our <span>Services</span></h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="box ">
                        <div class="img-box">
                            <img src="{{ asset('frontend/assets/images/mission.png')}}" alt />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Our Mission
                            </h5>
                            <p>
                                To be a leading and socially responsible steel manufacturing
                                company, committed to delivering high-quality products that
                                exceed customer expectations. We strive to foster a culture of
                                innovation, sustainability, and excellence in every aspect of
                                our operations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="box ">
                        <div class="img-box">
                            <img src="{{ asset('frontend/assets/images/vision.png')}}" alt />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Our Vission
                            </h5>
                            <p>
                                To be the global leader in sustainable steel manufacturing,
                                recognized for excellence in innovation, quality, and
                                environmental stewardship. We envision a future where our
                                products contribute to the development of resilient and
                                sustainable infrastructure, setting new standards for the
                                steel industry.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="info_section ">
        <div class="info_container layout_padding2">
            <div class="container">
                <div class="info_logo">
                    <a class="navbar-brand " href="index.html"> <img src="./images/logo.png" alt> </a>
                </div>
                <div class="info_main">
                    <div class="row">
                        <div class="col-md-3 ">
                            <h5>
                                About Steel
                            </h5>
                            <p>
                                Steel is an alloy of iron and carbon, with other elements such
                                as manganese, chromium, nickel, and molybdenum often added to
                                enhance its properties. The manufacturing process involves
                                several stages, including:
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2">
                            <div class="info_link-box">
                                <h5>
                                    Quick Link
                                </h5>
                                <ul>
                                    <li class=" active">
                                        <a class href="{{ '/' }}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class>
                                        <a class href="{{ route('user.about') }}">About </a>
                                    </li>
                                    <li class>
                                        <a class href="service.html">Services </a>
                                    </li>
                                    <li class>
                                        <a class href="blog.html"> Blog</a>
                                    </li>
                                    <li class>
                                        <a class href="contact.html"> Contact </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 mx-auto  ">
                            <h5>
                                social media
                            </h5>
                            <div class="social_box">
                                <a href>
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href>
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href>
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href>
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h5>
                                Our Address
                            </h5>
                            <p>
                                Bhubaneswar,laxmisagar
                            </p>
                        </div>
                    </div>
                </div>
                <div class="info_bottom">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="info_contact ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" class="link-box">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                Location
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="#" class="link-box">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>
                                                Call +01234567896
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="link-box">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>
                                                demo@gmail.com
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info_form ">
                                <form action>
                                    <input type="email" placeholder="Enter Your Email" />
                                    <button>
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Steel Management</a>
            </p>
        </div>
    </footer>
    <script src="{{ asset('frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/assets/js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
