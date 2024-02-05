<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Steel Management</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
          <h1 class="display-3 text-white mb-3 animated slideInDown">Special
            Steel</h1>
  
        </div>
      </div>

    <!-- about section -->

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
                    
                    
                    
                  <div class="row mt-4">
                    <div class="col-md-12">
                      <div class="section-title mb-3">
                        <h2 class="title">Special <span> Steel</span></h2>
                      </div>
                      <p>"Special steel" refers to a category of steel that is
                        tailored for specific applications, often requiring
                        enhanced properties compared to standard or
                        general-purpose steel. These specialty steels are
                        designed to meet precise performance criteria and are
                        used in industries where standard steel may not provide
                        the necessary characteristics.</p>
                      <p>Designed for the production of tools. Tool steels are
                        known for their high hardness, wear resistance, and heat
                        resistance, making them suitable for cutting, drilling,
                        and forming tools in industries like manufacturing and
                        construction.</p>
                      <p>Engineered for high-speed cutting operations,
                        high-speed steels contain elements like tungsten,
                        molybdenum, and vanadium to withstand elevated
                        temperatures generated during cutting processes.</p>

                    </div>
                  </div>
                  <div class="row box-shadow mt-5">
                    <div class="col-lg-6 col-md-12 px-5 py-5">
                      <h4 class="title">Why Choose <span> STEEL
                          Management</span> </h4>
                      <p class="line-h-3 mb-0">Steel manufacturing involves
                        intricate processes from raw material extraction to
                        final product delivery. Effective management helps
                        streamline operations, ensuring efficiency and
                        minimizing waste.</p>
                      <div>
                        <div class="row mt-4">
                          <div class="col-sm-6">
                            <div class="featured-item p-0">

                              <div class="featured-title text-uppercase">
                                <h5>Unrivaled Expertise</h5>
                              </div>
                              <div class="featured-desc">
                                <p>"Unrivaled expertise in steel management"
                                  refers to a level of knowledge, skill, and
                                  proficiency that surpasses all others in
                                  effectively overseeing and leading the various
                                  aspects of steel industry operations.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 mt-3 mt-sm-0">
                            <div class="featured-item p-0">

                              <div class="featured-title text-uppercase">
                                <h5>Extensive Range of Special Steels</h5>
                              </div>
                              <div class="featured-desc">
                                <p>Our portfolio includes a diverse range of
                                  special steels, catering to a wide spectrum
                                  of industries. From high-strength alloy steels
                                  to corrosion-resistant stainless steels
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 mt-5">
                            <div class="featured-item p-0">

                              <div class="featured-title text-uppercase">
                                <h5>Cutting-Edge Manufacturing Technologies</h5>
                              </div>
                              <div class="featured-desc">
                                <p>Cutting-edge manufacturing technologies play
                                  a crucial role in the steel industry,
                                  enhancing efficiency, precision, and
                                  sustainability.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 mt-5">
                            <div class="featured-item p-0">

                              <div class="featured-title text-uppercase">
                                <h5>Customized Solutions for Your Unique
                                  Needs</h5>
                              </div>
                              <div class="featured-desc">
                                <p>
                                  Providing customized solutions for the unique
                                  needs of steel management involves tailoring
                                  strategies, processes, and technologies to
                                  address specific challenges and opportunities
                                  within the industry.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 dark-bg px-5 py-5">
                      <img style="width:100%;height:100%;" src="{{ asset('frontend/assets/images/p1.jpg')}}"
                        alt>
                    </div>
                  </div>
                  <div class="row box-shadow mt-10">
                    <div class="col-lg-6 col-md-12 dark-bg px-5 py-5">

                      <img style="width:100%;height:100%;" src="{{ asset('frontend/assets/images/p2.jpg')}}"
                        alt>

                    </div>
                    <div class="col-lg-6 col-md-12 px-5 py-5">
                      <h4 class="title">Our <span>Technologies</span></h4>
                      <p class="line-h-3 mb-0">Steel technology encompasses a
                        broad spectrum of advancements and innovations related
                        to the production, processing, and application of steel.
                        Here are some key aspects of steel technology:</p>
                      <div>
                        <div class="row mt-4">
                          <div class="col-sm-6">
                            <div class="featured-item p-0">

                              <div class="featured-title text-uppercase">
                                <h5>Advanced Production Processes:</h5>
                              </div>
                              <div class="featured-desc">
                                <p>Basic Oxygen Furnace (BOF): Traditional
                                  method involving blowing oxygen through molten
                                  iron to produce steel.Electric Arc Furnace
                                  (EAF): Melting recycled steel using an
                                  electric arc, offering flexibility in steel
                                  production.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 mt-3 mt-sm-0">
                            <div class="featured-item p-0">

                              <div class="featured-title text-uppercase">
                                <h5>Quality Control and Inspection
                                  Technologies:</h5>
                              </div>
                              <div class="featured-desc">
                                <p>Utilization of advanced inspection
                                  techniques, such as non-destructive testing,
                                  for ensuring the quality and integrity of
                                  steel products.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 mt-4">
                            <div class="featured-item p-0">

                              <div class="featured-title text-uppercase">
                                <h5>High-Performance Steel Products:</h5>
                              </div>
                              <div class="featured-desc">
                                <p>Development of steel products with specific
                                  performance characteristics, such as
                                  high-strength steel for lightweight
                                  construction or advanced steel for automotive
                                  safety.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 mt-4">
                            <div class="featured-item p-0">

                              <div class="featured-title text-uppercase">
                                <h5>Research in New Materials and
                                  Composites:</h5>
                              </div>
                              <div class="featured-desc">
                                <p> Exploration of innovative materials and
                                  composites, including hybrid materials and
                                  advanced steel composites for specialized
                                  applications.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
