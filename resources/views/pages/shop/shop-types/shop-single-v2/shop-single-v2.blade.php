@extends('layouts.main')

@section('title', 'Shop Single v2')

@section('page-content')

    <!-- Shop Section -->
    <section class="shop-single-v1-section shop-single-v2-section section-box featured-hp-1 featured-hp-4">
        <div class="woocommerce">
            <div class="container">
                <div class="content-area">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="woocommerce-product-gallery">
                                <a href="#" class="onnew">NEW</a>
                                <div class="owl-carousel">
                                    <div class="item">
                                        <img src="/images/shop-single-v2-1.jpg" alt="product">
                                    </div>
                                    <div class="item">
                                        <img src="/images/shop-single-v2-2.jpg" alt="product">
                                    </div>
                                    <div class="item">
                                        <img src="/images/shop-single-v2-3.jpg" alt="product">
                                    </div>
                                    <div class="item">
                                        <img src="/images/shop-single-v2-4.jpg" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">Amyntas Pendant Lamp</h1>
                                <div class="woocommerce-product-rating">
                                    <div class="star-rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <a href="#" class="woocommerce-review-link">(2 customer review)</a>
                                </div>
                                <p class="price">
                                    <ins>
											<span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">$</span>
												135
											</span>
                                    </ins>
                                </p>
                                <div class="woocommerce-product-details__short-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                </div>
                                <form class="cart" method="post">
                                    <div class="quantity">
                                        <input type="number" name="quantity" id="quantity" value="1" min="1" class="nput-text qty text">
                                        <span class="modify-qty plus" onclick="Increase()">+</span>
                                        <span class="modify-qty minus" onclick="Decrease()">-</span>
                                    </div>
                                    <button type="submit" name="add-to-cart" class="single_add_to_cart_button button alt au-btn btn-small">Add to cart<i class="zmdi zmdi-arrow-right"></i></button>
                                </form>
                                <div class="product_meta">
										<span class="sku_wrapper">
											Sku:
											<span class="sku">MQ000131926_44</span>
										</span>
                                    <span class="posted_in">
											Category:
											<a href="#">Lighting</a>
										</span>
                                    <span class="tagged_as">
											Tag:
											<a href="#">Home Decor, Lightting</a>
										</span>
                                </div>
                                <div class="product-share">
                                    <span>Share:</span>
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a href="#"><i class="zmdi zmdi-tumblr"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="woocommerce-tabs">
                                <ul class="nav nav-tabs wc-tabs" id="myTab" role="tablist">
                                    <li class="nav-item description_tab" id="tab-title-description" role="tab" aria-controls="tab-description" aria-selected="true">
                                        <a class="nav-link active" href="#tab-description" data-toggle="tab">Description</a>
                                    </li>
                                    <li class="nav-item reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews" aria-selected="false">
                                        <a class="nav-link" href="#tab-reviews" data-toggle="tab">Reviews(2)</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="woocommerce-Tabs-panel tab-pane fade show active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div>
                                                    <img src="/images/shop-single-v2-5.png" alt="product">
                                                    <span>Measurements:</span>
                                                    <p>Total - H: 173 cm.</p>
                                                    <p>Shade - H: 9 cm Ø 49 cm.</p>
                                                    <p>Cable - L: 146 cm.</p>
                                                    <p>Ceiling Rose - H: 2 cm Ø 10 cm.</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <figure>
                                                    <img src="/images/shop-single-v2-6.jpg" alt="product">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-Tabs-panel tab-pane" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                        <div class="woocommerce-Reviews" id="reviews">
                                            <h2>2 review for Reframe Your Viewpoints</h2>
                                            <div id="comments">
                                                <div class="comment-list">
                                                    <div class="comment-item">
                                                        <div class="comment-content">
                                                            <img src="/images/shop-single-v1-4.jpg" alt="customer">
                                                            <div class="comment-body">
                                                                <div class="comment-author">
                                                                    <span class="author">Emily Valdez</span>
                                                                    <div class="star-rating">
                                                                        <i class="zmdi zmdi-star"></i>
                                                                        <i class="zmdi zmdi-star"></i>
                                                                        <i class="zmdi zmdi-star"></i>
                                                                        <i class="zmdi zmdi-star"></i>
                                                                        <i class="zmdi zmdi-star-outline"></i>
                                                                    </div>
                                                                </div>
                                                                <span class="comment-time">March 28, 2020</span>
                                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-item">
                                                        <div class="comment-content">
                                                            <img src="/images/shop-single-v1-5.jpg" alt="customer">
                                                            <div class="comment-body">
                                                                <div class="comment-author">
                                                                    <span class="author">Emma Hayes</span>
                                                                    <div class="star-rating">
                                                                        <i class="zmdi zmdi-star"></i>
                                                                        <i class="zmdi zmdi-star"></i>
                                                                        <i class="zmdi zmdi-star"></i>
                                                                        <i class="zmdi zmdi-star"></i>
                                                                        <i class="zmdi zmdi-star"></i>
                                                                    </div>
                                                                </div>
                                                                <span class="comment-time">March 28, 2020</span>
                                                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <form id="commentform" class="comment-form common-form js-contact-form" action="includes/contact-form.php" method="POST">
                                                            <p class="comment-notes">
                                                                <span>Add a review</span>
                                                                <span id="email-notes">
																		Your email address will not be published. Required fields are marked
																		<span class="required">*</span>
																	</span>
                                                            </p>
                                                            <div class="comment-form-rating">
                                                                <label>Your rating</label>
                                                                <p class="stars">
                                                                    <a href="#" class="star-1"><i class="zmdi zmdi-star-outline"></i></a>
                                                                    <a href="#" class="star-2"><i class="zmdi zmdi-star-outline"></i></a>
                                                                    <a href="#" class="star-3"><i class="zmdi zmdi-star-outline"></i></a>
                                                                    <a href="#" class="star-4"><i class="zmdi zmdi-star-outline"></i></a>
                                                                    <a href="#" class="star-5"><i class="zmdi zmdi-star-outline"></i></a>
                                                                </p>
                                                            </div>
                                                            <p class="comment-form-author">
                                                                <input id="author" name="author" type="text" required="" placeholder="Your Name">
                                                            </p>
                                                            <p class="comment-form-email">
                                                                <input type="email" required="" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email" id="email" placeholder="Your Email">
                                                            </p>
                                                            <p class="comment-form-comment">
                                                                <textarea id="comment" name="comment" required="" placeholder="Write Your Review..."></textarea>
                                                            </p>
                                                            <p class="form-submit">
                                                                <input name="submit" type="submit" id="submit" class="submit au-btn btn-small" value="Submit">
                                                                <span><i class="zmdi zmdi-arrow-right"></i></span>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('pages.shop.shop-types.shop-single-v2.related')
                    @include('pages.shop.shop-types.shop-single-v2.bestseller')
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Section -->
@endsection
