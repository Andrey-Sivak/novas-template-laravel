@extends('layouts.main')

@section('title', 'Product Showcase')

@section('page-content')

    <!-- Items Section -->
    <section class="items-hp-5 product-showcase-section section-box">
        <!-- Item 1 -->
        <div class="items-content woocommerce">
            <div class="woocommerce-product-gallery number-two">
                <div class="owl-carousel">
                    <div class="item">
                        <img src="/images/hp-5-items-1-1.jpg" alt="product">
                    </div>
                    <div class="item">
                        <img src="/images/hp-5-items-1-2.jpg" alt="product">
                    </div>
                    <div class="item">
                        <img src="/images/hp-5-items-1-3.jpg" alt="product">
                    </div>
                </div>
            </div>
            <div class="summary entry-summary number-three">
                <h2 class="product_title entry-title">Grey Tweed Armchair</h2>
                <div class="woocommerce-product-details__short-description">
                    <p>A good imitation can come close, but nothing beats the real thing. Under an exclusive licence, Polish label 366 Concept</p>
                </div>
                <p class="price">
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol">$</span>
								510
							</span>
                </p>
                <form class="cart" method="post" enctype="multipart/form-data">
                    <div class="quantity">
                        <button type="submit" class="single_add_to_cart_button button alt au-btn btn-small" name="add-to-cart">Add To Basket<i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="images-cover number-one">
                <a href="#" class="bg-image">
                    <img src="/images/hp-5-images-cover-1.jpg" alt="product">
                </a>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="items-content items-content-1 woocommerce">
            <div class="images-cover">
                <a href="#" class="bg-image">
                    <img src="/images/hp-5-images-cover-2.jpg" alt="product">
                </a>
            </div>
            <div class="summary entry-summary number-three">
                <h2 class="product_title entry-title">Casia Side Table - Bronze</h2>
                <div class="woocommerce-product-details__short-description">
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally.</p>
                </div>
                <form class="cart" method="post" enctype="multipart/form-data">
                    <div class="quantity">
                        <button type="submit" class="single_add_to_cart_button button alt au-btn btn-small" name="add-to-cart">Add To Basket<i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </form>
                <p class="price">
						<span class="woocommerce-Price-amount amount">
							<span class="woocommerce-Price-currencySymbol">$</span>
							249
						</span>
                </p>
            </div>
            <div class="woocommerce-product-gallery number-two">
                <div class="owl-carousel">
                    <div class="item">
                        <img src="/images/hp-5-items-2-1.jpg" alt="product">
                    </div>
                    <div class="item">
                        <img src="/images/hp-5-items-2-2.jpg" alt="product">
                    </div>
                    <div class="item">
                        <img src="/images/hp-5-items-2-3.jpg" alt="product">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Items Section -->
@endsection
