@extends('layouts.main')

@section('title', 'Mailchimp Form')

@section('page-content')

    <!-- Newsletter Section -->
    <section class="newsletter-hp-4 newsletter-mailchimp-form section-box">
        <div class="newsletter-content" style="background-image: url(/images/hp-4-newsletter-bg.jpg)">
            <div class="container">
                <div class="newsletter-details">
                    <p>Subsribe for<span>Newsletter</span></p>
                    <input type="text" name="email" placeholder="Enter your mail address here">
                    <a href="#" class="au-btn au-btn-black">Subscribe<i class="zmdi zmdi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Newsletter Section -->
@endsection
