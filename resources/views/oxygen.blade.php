<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Steel Management</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                                    <a class="nav-link" href="{{ route('user.welcome') }}">Home <span
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
    <div class="container-fluid page-header5 mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 ">Oxygen</h1>

        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-sidebar">
                        <div class="portfolio-details">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($products as $key => $product)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            @if ($product->images)
                                                <?php $images = json_decode($product->images, true); ?>
                                                @if (count($images) > 0)
                                                    <div class="row">
                                                        @foreach ($images as $image)
                                                            <div class="col-md-3">
                                                                <img src="{{ asset('storage/' . $image) }}" alt="image" class="img-fluid"
                                                                    style="max-width: 100%; height: auto;">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    No Images
                                                @endif
                                            @else
                                                No Images
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-12">
                                    <div class="owl-carousel no-pb" data-dots="false" data-nav="true" data-items="1"
                                        data-autoplay="true">
                                        <div class="item">
                                            <img class="img-fluid w-100" src="images/portfolio/iron (1).jpg" alt>
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid w-100" src="images/portfolio/make1.jpg" alt>
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid w-100" src="images/portfolio/make2.jpg" alt>
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid w-100" src="images/portfolio/make3.jpg" alt>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="section-title mb-3">
                                        <h2 class="title"> <span> Oxygen</span></h2>
                                    </div>
                                    <p>Managing iron and steel production involves overseeing
                                        various processes and aspects of the industry, from raw
                                        material extraction to the final product. Here is an
                                        overview of key aspects related to steel management in
                                        iron making.</p>
                                    <p>Iron Ore: Iron ore is the primary raw material for steel
                                        production. Effective management involves securing a
                                        stable and cost-effective supply of high-quality iron
                                        ore.</p>
                                    <p>Extraction and Processing: Efficient mining and
                                        processing operations are crucial. Advanced technologies
                                        such as automation and optimization play a significant
                                        role in improving productivity and reducing costs.</p>

                                </div>
                            </div>

                            <section>
                                <div class="container">

                                    <div class="row text-center">
                                        <div class="col-lg-8 col-md-10 mx-auto">
                                            <div class="section-title">
                                                <h2 class="title">CAST <span>PRODUCTS</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="  ">

                                </div>
                            </section>
                            <div class="row box-shadow mt-5">
                                <div class="col-lg-6 col-md-12 px-5 py-5">
                                    <h4 class="title">About <span>Oxygen </span> </h4>
                                    <p class="line-h-3 mb-0">Steel management in iron making
                                        involves overseeing the entire process of converting iron
                                        ore into molten iron, a crucial step in the production of
                                        steel. This process typically involves the use of blast
                                        furnaces or direct reduction methods. Here's an overview
                                        of key aspects related to steel management in iron
                                        making</p>
                                    <div>
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <div class="featured-item p-0">

                                                    <div class="featured-title text-uppercase">
                                                        <h5>High-Quality Raw Materials</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>The quality of raw materials is critical in
                                                            steel management during the iron-making process.
                                                            High-quality raw materials contribute to the
                                                            production of superior steel with desirable
                                                            properties. Here are key considerations for
                                                            high-quality raw materials in iron making</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <div class="featured-item p-0">
                                                    <div class="featured-title text-uppercase">
                                                        <h5>Sustainable Practices</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Sustainable practices in steel management
                                                            during iron making are crucial for minimizing
                                                            environmental impact, optimizing resource use,
                                                            and ensuring long-term viability. Here are some
                                                            sustainable practices in the iron-making
                                                            process.
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-5">
                                                <div class="featured-item p-0">
                                                    <div class="featured-title text-uppercase">
                                                        <h5>State-of-the-Art Blast Furnace Technology</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>
                                                            As of my last knowledge update in January 2022,
                                                            state-of-the-art blast furnace technology in
                                                            iron making and steel management is
                                                            characterized by advancements aimed at improving
                                                            efficiency, reducing environmental impact, and
                                                            enhancing overall operational performance.</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-5">
                                                <div class="featured-item p-0">

                                                    <div class="featured-title text-uppercase">
                                                        <h5> Advanced Smelting and Casting Processes</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Our innovative methods ensure precise
                                                            temperature control and composition management,
                                                            resulting in molten iron of consistent
                                                            quality.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 dark-bg px-5 py-5">
                                    <img style="width:100%;height:100%;" src="{{ asset('frontend/assets/images/oxygen1.jpg')}}" alt>
                                </div>
                            </div>
                            <div class="row box-shadow mt-10">

                                <div class="col-lg-6 col-md-12 dark-bg px-5 py-5">

                                    <img style="width:100%;height:100%;" src="{{ asset('frontend/assets/images/oxy1.jpg')}}" alt>

                                </div>
                                <div class="col-lg-6 col-md-12 px-5 py-5">
                                    <h4 class="title">Our <span>Technologies</span></h4>
                                    <p class="line-h-3 mb-0">
                                        As of my last knowledge update in January 2022, several
                                        technologies are commonly employed in the steel management
                                        and iron-making processes. These technologies are
                                        continuously evolving to improve efficiency, reduce
                                        environmental impact, and enhance overall
                                        sustainability.:</p>
                                    <div>
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <div class="featured-item p-0">

                                                    <div class="featured-title text-uppercase">
                                                        <h5>Continuous Process Monitoring and Control</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Embracing Industry 4.0 principles, Aarti Steel
                                                            integrates real-time monitoring and
                                                            control systems into our iron-making
                                                            operations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-3 mt-sm-0">
                                                <div class="featured-item p-0">

                                                    <div class="featured-title text-uppercase">
                                                        <h5> Innovative Smelting and Casting
                                                            Techniques</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Our iron-making process incorporates innovative
                                                            smelting and casting techniques.
                                                            Advanced methods ensure precise temperature
                                                            control, composition management.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-4">
                                                <div class="featured-item p-0">

                                                    <div class="featured-title text-uppercase">
                                                        <h5> Alloying Expertise and Development</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Our ability to create tailor-made alloys adds
                                                            versatility to our iron products, making
                                                            them suitable for a wide range of
                                                            applications.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-4">
                                                <div class="featured-item p-0">

                                                    <div class="featured-title text-uppercase">
                                                        <h5>Quality Control and Metallurgical Testing</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>
                                                            Quality control and metallurgical testing play
                                                            crucial roles in ensuring the production of
                                                            high-quality steel in iron making and steel
                                                            management. These processes involve monitoring
                                                            and assessing the composition, properties, and
                                                            performance of materials at various stages of
                                                            production.</p>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <a class href="{{ '/' }}">Home <span
                                                class="sr-only">(current)</span></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
