<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <!-- Your CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="icon" href="images/fevicon.png" type="image/gif">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- jQuery with fallback -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        if (typeof jQuery == 'undefined') {
            document.write('<script src="https://code.jquery.com/jquery-3.6.0.min.js"><\/script>');
        }
    </script>
    
    <!-- Verify jQuery loaded -->
    <script>
        $(document).ready(function() {
            console.log("jQuery version:", $.fn.jquery);
            // Your other jQuery code here
        });
    </script>
</head>
  <body>

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
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="{{ asset('images/client-img.png') }}"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="{{ asset('images/client-img.png') }}"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="{{ asset('images/client-img.png') }}"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
            crossorigin="anonymous"></script>

  </body>
</html>
