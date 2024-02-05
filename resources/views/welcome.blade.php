@extends('layouts.user.app')
@section('content')


<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>Welcome to <span>Steel Management</span></h2>
                    </div>
                    <p>
                        Steel manufacturing is the process of producing steel, a
                        versatile and widely used alloy of iron. Steel is known for its
                        strength, durability, and various applications in construction,
                        manufacturing, transportation, and other industries
                    </p>
                    <a href="{{ route('user.about') }}"> Read More </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/right.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio_section">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Our Work Gallery</h2>
        </div>
        {{-- <div class="carousel-wrap">
            <div class="filter_box">
                <nav class="owl-filter-bar">
                    <a href="#" class="item active" data-owl-filter="*">Carbon Steel</a>
                    <a href="#" class="item" data-owl-filter=".decorative">Alley Steel</a>
                    <a href="#" class="item" data-owl-filter=".facade">Stainlus Steel
                    </a>
                    <a href="#" class="item" data-owl-filter=".perforated">Galvanized
                    </a>
                    <a href="#" class="item" data-owl-filter=".railing">Electrical Steel</a>
                </nav>
            </div>
        </div> --}}
    </div>
    <div class="owl-carousel portfolio_carousel">
        <div class="item decorative">
            <div class="box">
                <div class="img-box">
                    <img src="{{asset('frontend/assets/images/p1.jpg')}}" alt="" />
                    
                </div>
            </div>
        </div>
        <div class="item facade">
            <div class="box">
                <div class="img-box">
                    <img src="{{asset('frontend/assets/images/p2.jpg')}}" alt="" />
                    
                </div>
            </div>
        </div>
        <div class="item perforated decorative">
            <div class="box">
                <div class="img-box">
                    <img src="{{asset('frontend/assets/images/p3.jpg')}}" alt="" />
                    
                </div>
            </div>
        </div>
        <div class="item railing">
            <div class="box">
                <div class="img-box">
                    <img src="{{asset('frontend/assets/images/p1.jpg')}}" alt="" />
                   
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Our <span>Services</span></h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('frontend/assets/images/s1.png')}}" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>Special Steel</h5>
                        <p>
                            when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('frontend/assets/images/s2.png')}}" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>Iron Making</h5>
                        <p>
                            when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('frontend/assets/images/s3.png')}}" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>Ferro Alloy</h5>
                        <p>
                            when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('frontend/assets/images/s4.png')}}" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>Round Bars</h5>
                        <p>
                            when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('frontend/assets/images/s5.png')}}" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>Wire Rods</h5>
                        <p>
                            when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('frontend/assets/images/s6.png')}}" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>Oxygen</h5>
                        <p>
                            when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<section class="contact_section">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Get In <span>Touch</span></h2>
        </div>
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="form_container">
                    <form action="{{ route('user.contact.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="text" class="form-control" placeholder="Your Name" name="name" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" maxlength="10" />
                            </div>
                           
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="email" class="form-control" placeholder="Email" name="email"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="text" class="message-box form-control" placeholder="Message" name="message"/>
                            </div>
                        </div>
                        <div class="btn_box">
                            <button type="submit">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="info_section">
    <div class="info_container layout_padding2">
        <div class="container">
            <div class="info_logo">
                <a class="navbar-brand" href="index.html">
                    <img src="./images/logo.png" alt="" />
                </a>
            </div>
            <div class="info_main">
                <div class="row">
                    <div class="col-md-3">
                        <h5>About Steel</h5>
                        <p>
                            Steel is an alloy of iron and carbon, with other elements such
                            as manganese, chromium, nickel, and molybdenum often added to
                            enhance its properties. The manufacturing process involves
                            several stages, including:
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div class="info_link-box">
                            <h5>Quick Link</h5>
                            <ul>
                                <li class="active">
                                    <a class="" href="index.html">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="">
                                    <a class="" href="about.html">About </a>
                                </li>
                                <li class="">
                                    <a class="" href="service.html">Services </a>
                                </li>
                                <li class="">
                                    <a class="" href="blog.html"> Blog</a>
                                </li>
                                <li class="">
                                    <a class="" href="contact.html"> Contact </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 mx-auto">
                        <h5>social media</h5>
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
                    <div class="col-md-3">
                        <h5>Our Address</h5>
                        <p>Bhubaneswar,laxmisagar</p>
                    </div>
                </div>
            </div>
            <div class="info_bottom">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="info_contact">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#" class="link-box">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span> Location </span>
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <a href="#" class="link-box">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span> Call +01234567896 </span>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="link-box">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span> demo@gmail.com </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_form">
                            <form action="">
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

@endsection