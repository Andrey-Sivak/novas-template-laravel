
<nav class="main-menu">
    <ul>
        <li class="menu-item">
            <a href="/" @if( Request::is('/') ) class="current" @endif>
                HOME
            </a>
            <ul class="sub-menu">
                <li><a href="/">Homepages 1</a></li>
                <li><a href="index2.html">Homepages 2</a></li>
                <li><a href="index3.html">Homepages 3</a></li>
                <li><a href="index4.html">Homepages 4</a></li>
                <li><a href="index5.html">Homepages 5</a></li>
                <li><a href="/">Homepages 6</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/about-us" @if( Request::is('about-us') || Request::is('contact-us') ) class="current" @endif>
                PAGES
            </a>
            <ul class="sub-menu">
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/contact-us">Contact Us</a></li>
                <li><a href="/coming-soon">Coming Soon</a></li>
                <li><a href="/error">404 Error</a></li>
            </ul>
        </li>
        <li class="menu-item mega-menu">
            <a href="/shop/shop-full-width" @if( Request::is('shop/*') ) class="current" @endif>
                SHOP
            </a>
            <ul class="sub-menu">
                <li class="sub-menu-item">
                    <ul class="one">
                        <li class="title">
                            SHOP TYPES
                        </li>
                        <li><a href="/shop/shop-full-width">Shop Full Width</a></li>
                        <li><a href="shop-right-width-siderbar.html">Shop Right Width Sidebar</a></li>
                        <li><a href="shop-left-width-siderbar.html">Shop Left Width Sidebar</a></li>
                        <li><a href="shop-single-v1.html">Shop Single_v1</a></li>
                        <li><a href="/shop/shop-single-v2">Shop Single_v2</a></li>
                    </ul>
                </li>
                <li class="sub-menu-item">
                    <ul class="second">
                        <li class="title">
                            SHOP PAGES
                        </li>
                        <li><a href="/shop/shop-cart">Shop Cart</a></li>
                        <li><a href="wish-list.html">Wish List</a></li>
                        <li><a href="/shop/check-out">Check Out</a></li>
                        <li><a href="/shop/my-account">My Account</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                    </ul>
                </li>
                <li class="sub-menu-item sub-menu-item-1">
                    <figure>
                        <img src="/images/header-shop-images.png" alt="shop">
                    </figure>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="blog-masonry.html">
                BLOG
            </a>
            <ul class="sub-menu">
                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                <li>
                    <a href="right-sidebar.html">
                        Blog Standard
                        <i class="zmdi zmdi-chevron-right"></i>
                    </a>
                    <ul class="sub-menu menu-levels">
                        <li><a href="right-sidebar.html">Right Sidebar</a></li>
                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="no-sidebar.html">No Sidebar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="standard-post.html">
                        Post Types
                        <i class="zmdi zmdi-chevron-right"></i>
                    </a>
                    <ul class="sub-menu menu-levels">
                        <li><a href="standard-post.html">Standard Post</a></li>
                        <li><a href="gallery-post.html">Gallery Post</a></li>
                        <li><a href="link-post.html">Link Post</a></li>
                        <li><a href="quote-post.html">Quote Post</a></li>
                        <li><a href="video-post.html">Video Post</a></li>
                        <li><a href="audio-post.html">Audio Post</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="standard-grid.html">
                PORTFOLIO
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="standard-grid.html">
                        Standard List
                        <i class="zmdi zmdi-chevron-right"></i>
                    </a>
                    <ul class="sub-menu menu-levels">
                        <li><a href="standard-grid.html">Standard Gird</a></li>
                        <li><a href="standard-wide.html">Standard Wide</a></li>
                    </ul>
                </li>
                <li>
                    <a href="gallery-grid.html">
                        Gallery List
                        <i class="zmdi zmdi-chevron-right"></i>
                    </a>
                    <ul class="sub-menu menu-levels">
                        <li><a href="gallery-grid.html">Gallery Gird</a></li>
                        <li><a href="gallery-wide.html">Gallery Wide</a></li>
                    </ul>
                </li>
                <li>
                    <a href="masonry-grid.html">
                        Masonry List
                        <i class="zmdi zmdi-chevron-right"></i>
                    </a>
                    <ul class="sub-menu menu-levels">
                        <li><a href="masonry-grid.html">Masonry Gird</a></li>
                        <li><a href="masonry-wide.html">Masonry Wide</a></li>
                    </ul>
                </li>
                <li>
                    <a href="two-columns-grid.html">
                        Layouts
                        <i class="zmdi zmdi-chevron-right"></i>
                    </a>
                    <ul class="sub-menu menu-levels">
                        <li><a href="two-columns-grid.html">Two Columns Grid</a></li>
                        <li><a href="three-columns-grid.html">Three Columns Grid</a></li>
                        <li><a href="three-columns-wide.html">Three Columns Wide</a></li>
                        <li><a href="four-columns-grid.html">Four Columns Grid</a></li>
                        <li><a href="four-columns-wide.html">Four Columns Wide</a></li>
                        <li><a href="five-columns-wide.html">Five Columns Wide</a></li>
                    </ul>
                </li>
                <li>
                    <a href="small-images.html">
                        Single Types
                        <i class="zmdi zmdi-chevron-right"></i>
                    </a>
                    <ul class="sub-menu menu-levels">
                        <li><a href="small-images.html">Small Images</a></li>
                        <li><a href="big-images.html">Big Images</a></li>
                        <li><a href="small-slider.html">Small Slider</a></li>
                        <li><a href="big-slider.html">Big Slider</a></li>
                        <li><a href="small-gallery.html">Small Gallery</a></li>
                        <li><a href="big-gallery.html">Big Gallery</a></li>
                        <li><a href="small-masonry.html">Small Masonry</a></li>
                        <li><a href="big-masonry.html">Big Masonry</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item mega-menu mega-menu-1">
            <a href="product-categories.html" @if( Request::is('elements/*') ) class="current" @endif>
                ELEMENTS
            </a>
            <ul class="sub-menu">
                <li class="sub-menu-item">
                    <ul>
                        <li class="title">
                            SHOP / PRODUCTS
                        </li>
                        <li><a href="product-categories.html">Product Categories</a></li>
                        <li><a href="standard-list.html">Standard List</a></li>
                        <li><a href="product-widget.html">Product Widget</a></li>
                        <li><a href="masonry-list.html">Masonry List</a></li>
                        <li><a href="/elements/product-showcase">Product Showcase</a></li>
                    </ul>
                </li>
                <li class="sub-menu-item">
                    <ul class="second">
                        <li class="title">
                            THEMING
                        </li>
                        <li><a href="/elements/banner">Banner</a></li>
                        <li><a href="/elements/our-team">Our Team</a></li>
                        <li><a href="/elements/testimonial">Testimonial</a></li>
                        <li><a href="/elements/countdown-timer">Countdown Timer</a></li>
                        <li><a href="/elements/mailchimp-form">Mailchimp Form</a></li>
                    </ul>
                </li>
                <li class="sub-menu-item sub-menu-item-1">
                    <figure>
                        <img src="/images/header-elements-images.png" alt="elements">
                    </figure>
                </li>
            </ul>
        </li>
    </ul>
</nav>

