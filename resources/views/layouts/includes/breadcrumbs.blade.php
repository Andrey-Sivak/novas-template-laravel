<!-- Breadcrumb Section -->
<section class="breadcrumb-contact-us breadcrumb-section section-box" style="background-image: url(/images/shop-bc.jpg)">
    <div class="container">
        <div class="breadcrumb-inner">
            <h1>Shop</h1>
            <ul class="breadcrumbs">
                <li><a class="breadcrumbs-1" href="/">Home</a></li>
                @if( Request::is('*/*') || Request::is('about-us') || Request::is('contact-us') )
                    <li><p class="breadcrumbs-2">@yield('title')</p></li>
                @endif
            </ul>
        </div>
    </div>
</section>
<!-- End Breadcrumb Section -->

