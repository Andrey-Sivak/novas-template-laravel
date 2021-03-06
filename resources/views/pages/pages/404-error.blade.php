@extends('layouts.main')

@section('title', 'Error 404')

@section('page-content')
    <!-- Page Not Found Section -->
    <section class="page-not-found" style="background-image: url(/images/page-not-found-bg.jpg)">
        <div class="page-detail">
            <div class="page-inner">
                <h2>Oops!</h2>
                <h2>Page not found!</h2>
                <p>Page you are looking for does not exits.</p>
                <a href="/" class="au-btn-white btn-small">Back to Home Page<i class="zmdi zmdi-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- End Page Not Found Section -->
@endsection
