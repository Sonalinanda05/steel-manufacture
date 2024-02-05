<header class="header_section">
    <div class="header_top">
        <div class="container-fluid header_top_container">
            <a class="navbar-brand" href="index.html">
                <img src="./images/logo.png" alt="" />
            </a>
            <div class="contact_nav">
                <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span> Location </span>
                </a>
                <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span> Call : +0123456789 </span>
                </a>
                <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span> demo@gmail.com </span>
                </a>
            </div>
            <div class="social_box">
                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand navbar_brand_mobile" href="index.html">
                    <img src="./images/logo.png" alt="" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link1" href="{{ route('user.welcome') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link1" href="{{ route('user.about') }}">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link1 dropdown-toggle" href="# " id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Service</a>
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
                            <a class="nav-link1" href="{{ route('user.blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link1" href="{{ route('user.contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link1" href="#">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span> Login </span>
                            </a>
                        </li>
                        <form class="form-inline">
                            <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<section class="slider_section">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="detail-box">
                        <h1>
                            We Build <br />
                            The Things Architects <br />
                            Dream Up
                        </h1>
                        <div class="btn-box">
                            <a href="#" class="btn1"> Read More </a>
                            <a href="contact.html" class="btn2"> Contact Us </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="detail-box">
                        <h1>
                            We Build <br />
                            The Things Architects <br />
                            Dream Up
                        </h1>
                        <div class="btn-box">
                            <a href="" class="btn1"> Read More </a>
                            <a href="" class="btn2"> Contact Us </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="detail-box">
                        <h1>
                            We Build <br />
                            The Things Architects <br />
                            Dream Up
                        </h1>
                        <div class="btn-box">
                            <a href="" class="btn1"> Read More </a>
                            <a href="" class="btn2"> Contact Us </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
