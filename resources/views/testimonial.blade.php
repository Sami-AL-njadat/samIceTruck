<!-- resources/views/testimonial.blade.php -->

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
                        <div id="main_slider" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p class="testimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                    <h4 class="client_name">Marri Fen</h4>
                                    <div class="client_img">
                                        <img src="{{ asset('images/logo.png') }}" alt="Client Image">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <p class="testimonial_text">Sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.</p>
                                    <h4 class="client_name">John Doe</h4>
                                    <div class="client_img">
                                        <img src="{{ asset('images/spinner.gif') }}" alt="Client Image">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <p class="testimonial_text">Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco.</p>
                                    <h4 class="client_name">Jane Smith</h4>
                                    <div class="client_img">
                                        <img src="{{ asset('images/client-img.png') }}" alt="Client Image">
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel Controls -->
                  


                                    <a class="carousel-control-prev"  data-bs-target="#main_slider" role="button"
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
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
