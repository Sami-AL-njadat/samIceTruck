<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1"> --}}
    <!-- site metas -->
    <title>ٍSam IceCreem Truck</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    @livewireStyles
</head>

<body>

    <div id="preloader"></div>



    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutUs">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#icecream">Icecream</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>


 
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital">IceCream Truck</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking at its layout. The
                                        point of using Lorem</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">
                                       
                                   <div class="bordarsmal">
                                       <img src="images/side0212.png" loading="lazy">

                                        </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital">IceCream Truck</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking at its layout. The
                                        point of using Lorem</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">
                                       
                                        <div class="bordarsmal">
                                       <img src="images/side7.png" loading="lazy"></div>

                                        </div>
                                       
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital">IceCream Truck</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking at its layout. The
                                        point of using Lorem</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">
                                    
                                    
    
                                        <div class="bordarsmal">


                                       <img src="images/slid1.png" loading="lazy">
                                    
                                    
                                    </div>

                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital">IceCream Truck</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking at its layout. The
                                        point of using Lorem</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">

                                        <div class="bordarsmal">
                                            <img src="images/side4.png" loading="lazy">

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- about sectuion start -->
    <div class="about_section layout_padding">
        <div class="container" id="aboutUs">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_img"><img src="images/about-img.png" loading="lazy"></div>
                </div>
                <div class="col-md-6">
                    <h1 class="about_taital">About Icecream</h1>
                    <p class="about_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore euconsectetur adipiscing esequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu</p>
                    <div class="read_bt_1"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about sectuion end -->
    <!-- cream sectuion start -->
    <div class="cream_section layout_padding">
        <div class="container" id="icecream">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cream_taital">Our Featured Ice Cream</h1>
                    <p class="cream_text">tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
            </div>
            <div class="cream_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/img-1.png" loading="lazy"></div>
                            <div class="price_text">$10</div>
                            <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/img-2.png" loading="lazy"></div>
                            <div class="price_text">$10</div>
                            <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/img-1.png" loading="lazy"></div>
                            <div class="price_text">$10</div>
                            <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cream_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/img-3.png" loading="lazy"></div>
                            <div class="price_text">$10</div>
                            <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/img-4.png" loading="lazy"></div>
                            <div class="price_text">$10</div>
                            <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img src="images/img-5.png" loading="lazy"></div>
                            <div class="price_text">$10</div>
                            <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- cream sectuion end -->

    @livewire('contact-form')

    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="services_taital">Our Ice Cream Services</h1>
                    <p class="services_text">tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
            </div>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img src="images/icon-1.png"
                                        loading="lazy"></span>Cookies Ice Cream</h5>
                            <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fat </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img src="images/icon-2.png"
                                        loading="lazy"></span>Cookies Ice Cream</h5>
                            <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fat </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img src="images/icon-1.png"
                                        loading="lazy"></span>Cookies Ice Cream</h5>
                            <p class="lorem_text">commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fat </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seemore_bt"><a href="#">Read More</a></div>
        </div>
    </div>
    <!-- services section end -->
    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="testimonial_taital">Testimonial</h1>
                </div>
            </div>
            <div class="testimonial_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial_box">
                            <div id="main_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        </p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="images/client-img.png" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        </p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="images/client-img.png" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        </p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="images/client-img.png" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#main_slider" role="button"
                                    data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#main_slider" role="button"
                                    data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact_main">
                        <h1 class="contact_taital">Contact Us</h1>
<div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380511.58486109035!2d-88.06153032415246!3d41.833750983111194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2sjo!4v1741814496501!5m2!1sen!2sjo" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
                     </div>
                </div>
                <div class="col-md-8">
                    <div class="location_text">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10 active"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i></span>Making this the first true</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10"><i class="fa fa-phone"
                                            aria-hidden="true"></i></span>Call : +01 1234567890
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></span>Email : demo@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mail_main">
                        <h3 class="newsletter_text">Newsletter</h3>
                        <div class="form-group">
                            <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                        </div>
                    </div>
                    <div class="footer_social_icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2025 All Rights Reserved. © Development by <a href="https://github.com/Sami-AL-njadat"> SAM 95 NJT</a> </p>
        </div>
    </div>


    @livewireScripts

    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    {{-- <script src="{{asset('js/popper.min.js')}}"></script> --}}
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- javascript -->

    <script>
        var preloader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            preloader.style.display = "none"
        })
    </script>
</body>

</html>
