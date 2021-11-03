@extends('layouts.main')

@section('title', 'Countdown Timer')

@section('page-content')

    <!-- Deal Off Section  -->
    <section class="deal-hp-2 deal-countdown-timer section-box">
        <div class="container-fluid">
            <div class="deal-content" style="background-image: url(/images/hp-2-deal-bg.jpg)">
                <p>Get <span>50%</span> off to your order</p>
                <h2 class="special-heading">Deal Of The Day</h2>
                <div id="clockdiv">
                    <div class="clock-inner">
                        <span class="days" id="days"></span>
                        <div class="smalltext">days</div>
                    </div>
                    <div class="clock-inner">
                        <span class="hours" id="hours"></span>
                        <div class="smalltext">hours</div>
                    </div>
                    <div class="clock-inner">
                        <span class="minutes" id="minutes"></span>
                        <div class="smalltext">mins</div>
                    </div>
                    <div class="clock-inner">
                        <span class="seconds" id="seconds"></span>
                        <div class="smalltext">secs</div>
                    </div>
                </div>
                <div class="shop">
                    <a href="shop-full-width.html" class="au-btn btn-small">Shop Now<i class="zmdi zmdi-arrow-right"></i></a>
                </div>
                <div class="image">
                    <img src="///images/hp-2-deal-1.png" alt="deal-off">
                </div>
            </div>
        </div>
    </section>
    <!-- End Deal Off Section  -->
@endsection
