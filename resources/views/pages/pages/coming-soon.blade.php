@extends('layouts.main')

@section('title', 'Coming Soon')

@section('page-content')
        <!-- Coming Soon Section -->
        <section class="coming-soon-page" style="background-image: url(/images/coming-soon-bg.jpg)">
            <div class="page-detail">
                <div class="page-inner">
                    <h1>Coming Soon</h1>
                    <div id="clock"></div>
                    <div class="subcribe">
                        <input type="email" required="" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email" placeholder="Your Email Address">
                        <a href="#" class="au-btn">Subscribe<i class="zmdi zmdi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Coming Soon Section -->
@endsection
