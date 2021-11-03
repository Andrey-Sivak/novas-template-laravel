<header class="header">
    <!-- Show Desktop Header -->
    <div class="show-desktop-header header-hp-1
        @if( Request::is('coming-soon') )
            header-404 style-header-hp-1 style-header-hp-5
        @elseif( Request::is('error') )
            header-404 style-header-hp-1 style-header-hp-5
        @endif ">
        <div id="js-navbar-fixed" class="menu-desktop">
            <div class="container-fluid">
                <div class="menu-desktop-inner">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="/images/icons/logo-@if( Request::is( 'error' ) ){{'white'}}@else{{'black'}}@endif.png" alt="logo"></a>
                    </div>
                    <!-- Main Menu -->
                @if( !Request::is('coming-soon') && !Request::is('error') )
                    @include('layouts.includes.header.main-menu')
                @endif
                    <!-- Header Right -->
                    <div class="header-right">
                        <!-- Search -->
                        <div class="search-btn-wrap">
                            <button class="search-btn"
                                    data-toggle="modal"
                                    data-target="#searchModal">
                                <img src="/images/icons/header-icon-@if( Request::is( 'error' ) ){{'11'}}@else{{'1'}}@endif.png" alt="search">
                            </button>
                        </div>
                        <!-- Cart -->
                        @include('layouts.includes.header.header-cart')
                        <!-- Canvas -->
                        @if( !Request::is( 'error' ) )
                            <div class="canvas canvas-btn-wrap">
                                <button class="canvas-images canvas-btn" data-toggle="modal" data-target="#canvasModal">
                                    <img src="/images/icons/header-icon-3.png" alt="canvas">
                                </button>

                            </div>
                        @endif
                    </div>
                </div>
                <!-- SEARCH MODAL-->
                @include('layouts.includes.header.header-search')
                <!-- CANVAS MODAL-->
                @include('layouts.includes.header.canvas-modal-header')
            </div>
        </div>
    </div>
    <!-- Show Mobile Header -->
    @include('layouts.includes.header.mobile-header')
</header>


