<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->


    <title>Sam's Ice Cream Truck | Chicago, Batavia, Wheaton & St. Charles</title>
    <meta name="keywords"
        content="Chicago ice cream, Ice cream truck, chicago, usa ,United States, batavia, Charles, St.Charles st.Batavia,Van ice cream, Wheaton ice cream, St. Charles truck ice cream, Wheaton ice cream truck, Batavia ice cream truck">
    <meta name="description"
        content="Enjoy delicious ice cream in Chicago and surrounding areas. Find the best ice cream trucks in Wheaton, St. Charles, and Batavia.,sam ice cream, truck,van,ice ,cream,chicago, usa ,United States,">

    <meta name="author" content="sami alnjadat ">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- fevicon -->
<link rel="icon" href="{{ asset('images/logo2.ico') }}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">



    @livewireStyles
</head>

<body>

    <div id="preloader"></div>
    <button id="scrollTopBtn" title="Go to top">↑</button>



    <div class="header_section">


        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/sam-ice-creem-truck') }}">
                    <img style="width: 71px; height: 89px;" src="{{asset('images/logo2.png')}}" alt="Logo sam ice cream truck">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/sam-ice-creem-truck') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutUs">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#icecream">Icecream</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#order">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ellocation">Location</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>








        <!-- banner section start2 -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">01</li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">02</li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">03</li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3">04</li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital">Best Ice Cream Truck in Chicago & Suburbs</h1>
                                    <p class="banner_text">Enjoy our ice cream truck in Chicago, Wheaton, St. Charles,
                                        and Batavia! Perfect for birthdays, corporate events, school gatherings, and
                                        neighborhood fun 🚚🍦.</p>


                                    <h2 class="mt-2">

                                        <a href="sms:+17087458108" style="color: #007bff; font-weight: bold;"><i
                                                class="fa fa-comment" style="color: #007bff;"></i> +1 (708)
                                            745-8108</a>
                                    </h2>

                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">

                                        <div class="bordarsmal">
                                            <img src="{{asset('images/side0212.png')}}" alt="icecream">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital">Chicago IceCream Truck</h1>
                                    <p class="banner_text">Looking for the best ice cream in Chicago? Look no further!
                                        We proudly offer the Best Ice Cream Truck in Chicago, serving up delicious,
                                        creamy treats that will satisfy any sweet tooth. Come find us and experience the
                                        tastiest ice cream in town!</p>

                                    <h2 class="mt-2">

                                        <a href="sms:+17087458108" style="color: #007bff; font-weight: bold;"><i
                                                class="fa fa-comment" style="color: #007bff;"></i> +1 (708)
                                            745-8108</a>
                                    </h2>

                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">

                                        <div class="bordarsmal">
                                            <img src="{{asset('images/side7.png')}}" alt="ice cream truck">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital">Chicago’s Favorite Ice Cream Truck</h1>
                                    <p class="banner_text">Serving delicious frozen treats on wheels! Find us in
                                        Chicago, Wheaton, St. Charles, and Batavia for parties, events, and everyday
                                        sweet cravings.</p>

                                    <h2 class="mt-2">

                                        <a href="sms:+17087458108" style="color: #007bff; font-weight: bold;"><i
                                                class="fa fa-comment" style="color: #007bff;"></i> +1 (708)
                                            745-8108</a>
                                    </h2>


                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">



                                        <div class="bordarsmal">


                                            <img src="{{asset('images/slid1.png')}}" alt="ice cream truck chicago" loading="lazy">


                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital">yummy IceCream Truck</h1>
                                    <p class="banner_text">Indulge in the best ice cream in Chicago with our Ice Cream
                                        Truck! sam icecream truck We bring the sweetest treats to you wherever you are.
                                        You can easily book our truck for any event and select the occasion you want
                                        through email or SMS. We're always available to help make your event extra
                                        special</p>

                                    <h2 class="mt-2">

                                        <a href="sms:+17087458108" style="color: #007bff; font-weight: bold;"><i
                                                class="fa fa-comment" style="color: #007bff;"></i> +1 (708)
                                            745-8108</a>
                                    </h2>
                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">

                                        <div class="bordarsmal">
                                            <img src="{{asset('images/side4.png')}}"  loading="lazy"
                                                alt="ice cream truck chicago St.Charles  st.Batavia"> 

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end2 -->
    </div>
     <!-- about sectuion start -->
    <div class="about_section layout_padding">
        <div class="container" id="aboutUs">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_img spin-on-scroll"><img src="{{asset('images/about22.png')}}" loading="lazy" alt="Batavia"></div>
                </div>
                <div class="col-md-6">
                    <h1 class="about_taital">About Sam Ice-Cream Truck</h1>
                    <p class="about_text">At Sam's Ice Cream Truck, we're all about bringing smiles, one scoop at a
                        time! Whether it's a wedding, birthday, school event, or fundraiser, we deliver delicious ice
                        cream treats that make every moment sweeter. With our wide variety of flavors and friendly
                        service, we’re dedicated to making your special events unforgettable.

                        Ready to add some sweetness to your day? Book now and let the fun begin! 🍦🎉</p>
                    <div class="read_bt_1"><a href="#order">Book Now</a></div>

                </div>
            </div>
        </div>
    </div>
    <!-- about sectuion end -->
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="services">
                    <h1 class="services_taital">Our Ice Cream Services</h1>
                    <p class="services_text">Sam Ice Cream Truck brings joy to every occasion! We provide delightful
                        ice cream experiences for weddings, birthdays, school events, fundraisers, and more. Whatever
                        the event, we’re here to make it sweeter! 🍦🎉</p>
                </div>
            </div>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img
                                        src="{{ asset('images/marriage.png') }}"  alt="Chicago" loading="lazy"></span>Wedding Ice-Cream</h5>
                            <p class="lorem_text">Add a Sweet Touch to Your Wedding!
                                Let us bring a unique experience to your special day with our delicious Cookies Ice
                                Cream, making your party even more fun and unforgettable. 🎉🍦 </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img
                                        src="{{ asset('images/Fundraising.png') }}" alt="Chicago" loading="lazy"></span>fundraising Ice-Cream</h5>
                            <p class="lorem_text">Sweeten Your Fundraiser with Ice Cream!
                                Make your event unforgettable with our delicious ice cream. Every scoop brings smiles
                                and supports your cause — a perfect way to raise funds while spreading joy! 🍦❤️ </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img
                                        src="{{ asset('images/hosrital.png') }}" alt="Chicago" loading="lazy"></span>Hospital Ice-Cream</h5>
                            <p class="lorem_text">Bringing Smiles with Every Scoop!
                                Treat patients, staff, and visitors to a delightful ice cream experience. A little
                                sweetness can brighten any day — because everyone deserves a moment of joy. 🍦😊</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="services_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img
                                        src="{{ asset('images/pivateEvents.png') }}" alt="Chicago" loading="lazy" ></span>Private Event Ice-Cream
                            </h5>
                            <p class="lorem_text">Make Your Private Event Unforgettable!
                                Add a sweet touch to your special gatherings with our delicious Ice Cream. Perfect for
                                anniversaries, or any celebration — because every moment deserves a tasty treat! 🍪🍦🎉
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img
                                        src="{{ asset('images/school.png') }}" alt="Chicago" loading="lazy"></span>School Ice-Cream</h5>
                            <p class="lorem_text">
                                Cool Treats for Cool Kids!
                                Bring excitement to your school events with our delicious ice cream. Perfect for
                                parties, fundraisers, and special occasions — because happy students make the best
                                memories! 🍦🎒🎉</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services_box">
                            <h5 class="tasty_text"><span class="icon_img"><img
                                        src="{{ asset('images/birthday.png') }}" alt="Batavia"  loading="lazy"></span>Birthday Ice-Cream</h5>
                            <p class="lorem_text">Celebrate Your Birthday with a Sweet Surprise!
                                Make your special day unforgettable with our delicious ice cream. Perfect for kids and
                                adults alike — because every birthday deserves a tasty treat! 🎂🍦🎉</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="seemore_bt"><a href="#order">Book Now</a></div>

        </div>
    </div>
    <!-- cream sectuion start -->

    <div class="cream_section layout_padding">
        <div class="container" id="icecream">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cream_taital">Our Featured Ice Cream</h1>
                    <p class="cream_text">We deal with different ice cream companies and offer a variety of delicious
                        products that people love.</p>
                </div>
            </div>
            <div class="cream_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img class="imgproduct" src="{{asset('images/OriginalBombPop.png')}}"
                                    loading="lazy"  alt="Chicago ice cream"></div>
                            <div class="price_text">-Best test ever-</div>
                            <h6 class="strawberry_text">Original Bomb Pop</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img class="imgproduct"
                                    src="{{asset('images/loadd-cones-brownie-bomb-v1.png')}}" loading="lazy" alt="Chicago ice cream"></div>
                            <div class="price_text">-Enjoy Today-</div>
                            <h6 class="strawberry_text">loadd-cones-brownie-bomb</h6>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img class="imgproduct" src="{{asset('images/vanilla-big-dipper.png')}}"
                                    loading="lazy" alt="sam ice cream"></div>
                            <div class="price_text">-Great taste-</div>
                            <h6 class="strawberry_text">Vanilla big dipper</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cream_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img class="imgproduct" src="{{asset('images/strawberry-shortcake.png')}}"
                                    loading="lazy" alt="sam ice cream"></div>
                            <div class="price_text">-Very mazing-</div>
                            <h6 class="strawberry_text">strawberry shortcake</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img class="imgproduct" src="{{asset('images/chips-galore-sandwich.png')}}"
                                    loading="lazy" alt="sam ice cream"></div>
                            <div class="price_text">-yummy Sandwich-</div>
                            <h6 class="strawberry_text">chips-galore-sandwich</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cream_box">
                            <div class="cream_img"><img class="imgproduct" src="{{asset('images/CookiesCream.png')}}"
                                    loading="lazy" alt="sam ice cream"></div>
                            <div class="price_text">-A strong shock-</div>
                            <h6 class="strawberry_text">Cookies Cream</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cream sectuion end -->

    @livewire('contact-form')


    <div class="testimonial_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="ellocation">
                    <h1 class="testimonial_taital">Our Location</h1>
                </div>
            </div>
            <div class="testimonial_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial_box">
                            <div id="main_slider" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p class="testimonial_text">We’re excited to welcome you! Visit us at our
                                            location St.charles Chicago – we’re waiting for you

                                        </p>
                                        <h4 class="client_name">St.charles Chicago</h4>
                                        <div class="client_img">
                                            <img src="{{ asset('images/St.Charles.png') }}"
                                                style="width: 290px ; height: 220px;"
                                                alt="St.Charles sam ice cream"
                                                  loading="lazy"
                                                >
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                      <p class="testimonial_text">We’re excited to welcome you! Visit us at our
                                            location Wheaton Chicago – we’re waiting for you

                                        </p>
                                        <h4 class="client_name">Wheaton Chicago</h4>
                                        <div class="client_img">
                                            <img src="{{ asset('images/WheatonChicagos.png') }}"
                                                style="width: 290px ; height: 220px;"
                                                alt="Wheaton Chicagos  sam ice cream"
                                                loading="lazy"
                                                >
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                      <p class="testimonial_text">We’re excited to welcome you! Visit us at our
                                            location Batavia Chicago – we’re waiting for you

                                        </p>
                                        <h4 class="client_name">Batavia Chicago</h4>
                                        <div class="client_img">
                                            <img src="{{ asset('images/Batavia.png') }}"
                                                style="width: 290px ; height: 220px;"
                                                alt="Batavia Chicago sam ice cream"
                                                 loading="lazy"

                                                >
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel Controls -->



                                <a class="carousel-control-prev" data-bs-target="#main_slider" role="button"
                                    data-bs-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control-next" data-bs-target="#main_slider" role="button"
                                    data-bs-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="contact_main">
                        <h1 class="contact_taital maps">Meet US</h1>
                        <div class="map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380511.58486109035!2d-88.06153032415246!3d41.833750983111194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2sjo!4v1741814496501!5m2!1sen!2sjo"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="location_text">
                        <ul>
                            <li>
                                <a href="#ellocation">
                                    <span class="padding_left_10 active"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i></span>Making this the first true</a>
                            </li>
                            <li>
                                <a href="tel:+17087458108">
                                    <span class="padding_left_10"><i class="fa fa-phone"
                                            aria-hidden="true"></i></span>Call : +1 (708) 7458108
                                </a>
                            </li>
                            <li>
                                <a href="mailto:samicecream52@gmail.com">
                                    <span class="padding_left_10"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></span>Email : samicecream52@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer_social_icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer_social_icon about_img">
                        <img style="width: 100px; height: 100px;" src="{{asset('images/logo2.png')}}"
                         alt="Chicago ice cream">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- contact section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2025 All Rights Reserved. © Development by <a
                    href="https://github.com/Sami-AL-njadat"> SAM 95 NJT</a> </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- External Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Additional External Plugins -->
    <script src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mCustomScrollbar/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <script src="{{ asset('js/scrolltop.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/animation22.js') }}"></script>
 
    <script>
        var preloader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            preloader.style.display = "none"
        })
    </script>

@livewireScripts


 </body>

</html>
