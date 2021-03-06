@extends('layouts.main')

@section('title', 'Contact Us')

@section('page-content')

    <!-- Contact Section -->
    <section class="contact-section section-box">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="quote-form">
                            <form class="form-contact js-contact-form" method="POST" action="includes/contact-form.php">
                                <div class="form-input">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-input">
                                    <input type="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-textarea">
                                    <textarea name="message" required placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-bottom">
                                    <input type="submit" class="end-quote-1" name="quote" value="Submit">
                                    <span><i class="zmdi zmdi-arrow-right"></i></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contact-details">
                            <h2 class="special-heading">Contact Details</h2>
                            <div class="contact-info">
                                <div class="contact-inner">
                                    <h3>NewYork</h3>
                                    <p><i class="zmdi zmdi-map"></i> No 40 Baria Sreet 133/2 NewYork 13589</p>
                                    <p class="center"><i class="zmdi zmdi-email"></i> kathryn-92@example.com</p>
                                    <p><a href="tel:8494904283"><i class="zmdi zmdi-phone"></i> (849) 490 4283</a></p>
                                </div>
                                <div class="contact-inner">
                                    <h3>Barcelona</h3>
                                    <p><i class="zmdi zmdi-map"></i> 184 Main Collins Street West Barselona 23765</p>
                                    <p class="center"><i class="zmdi zmdi-email"></i> steven82@example.com</p>
                                    <p><a href="tel:5273766381"><i class="zmdi zmdi-phone"></i> (527) 376 6381</a></p>
                                </div>
                            </div>
                            <div class="socials">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-tumblr"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Map Section  -->
    <section class="map-section">
        <div class="google-map-section">
            <div class="map-wrapper js-google-map" data-makericon="images/icons/map-icon.png" data-makers='[["Novas", "Now that you visited our website,<br> how about checking out our office too?", 40.786813, -73.834441]]'>
                <div class="map__holder js-map-holder" id="map"></div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
@endsection
