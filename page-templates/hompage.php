<?php 

/**
 * Template Name: Homepage
 */

 ?>


<?php get_header(); ?>


    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">

            <div>

                <?php $v_slider = $vshop_demo['v_slide'];
                    foreach($v_slider as $vslide ): ?>

                <div class="home text-center">
                    <img src="<?php echo $vslide['image']; ?>" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4><?php echo $vslide['description']; ?></h4>
                                        <h1><?php echo $vslide['title']; ?></h1><a href="<?php echo $vslide['url']; ?>" class="btn btn-solid"><?php echo $vshop_demo['button_text']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <?php endforeach; ?>
 
        <?php  //print_r($vslide); ?>


        </div>
    </section>
    <!-- Home slider end -->


    <!-- collection banner -->
    <section class="banner-padding absolute-banner pb-0">
        <div class="container absolute-bg">
            <div class="service p-0">
                <div class="row">
                    <?php 

                        $banners = carbon_get_theme_option( 'crb_banners' );
                        foreach ( $banners as $banner ): 
                                 $b_icon = $banner['b_item_icon'];
                            ?>

                          <div class="col-md-4 service-block">
                            <div class="media">                        

                              <i class="fa <?php echo $b_icon['class']; ?>"  aria-hidden="true"></i>
                                
                          </div>
                              <div class="media-body">
                                    <h4><?php echo $banner['b_item_title']; ?></h4>
                                    <p><?php echo $banner['b_item_des']; ?></p>
                                </div>
                        </div>

                       <?php endforeach; ?>
                            
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- product section -->
    <section class="section-b-space addtocart_count ratio_square">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title4">
                        <h2 class="title-inner4">trending products</h2>
                        <div class="line"><span></span></div>
                    </div>
                    <div class="product-5 product-m no-arrow">
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/1.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="addtocart_btn">
                                    <button class="add-button add_cart" title="Add to cart">
                                        Add to Cart
                                    </button>
                                    <div class="qty-box cart_qty">
                                        <div class="input-group">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input type="text" name="quantity"
                                                class="form-control input-number qty-input" value="1">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/2.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="addtocart_btn">
                                    <button class="add-button add_cart" title="Add to cart">
                                        Add to Cart
                                    </button>
                                    <div class="qty-box cart_qty">
                                        <div class="input-group">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input type="text" name="quantity"
                                                class="form-control input-number qty-input" value="1">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/3.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="addtocart_btn">
                                    <button class="add-button add_cart" title="Add to cart">
                                        Add to Cart
                                    </button>
                                    <div class="qty-box cart_qty">
                                        <div class="input-group">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input type="text" name="quantity"
                                                class="form-control input-number qty-input" value="1">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/4.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="addtocart_btn">
                                    <button class="add-button add_cart" title="Add to cart">
                                        Add to Cart
                                    </button>
                                    <div class="qty-box cart_qty">
                                        <div class="input-group">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input type="text" name="quantity"
                                                class="form-control input-number qty-input" value="1">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/5.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="addtocart_btn">
                                    <button class="add-button add_cart" title="Add to cart">
                                        Add to Cart
                                    </button>
                                    <div class="qty-box cart_qty">
                                        <div class="input-group">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input type="text" name="quantity"
                                                class="form-control input-number qty-input" value="1">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/6.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="addtocart_btn">
                                    <button class="add-button add_cart" title="Add to cart">
                                        Add to Cart
                                    </button>
                                    <div class="qty-box cart_qty">
                                        <div class="input-group">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input type="text" name="quantity"
                                                class="form-control input-number qty-input" value="1">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- Parallax banner -->
    <section class="p-0">
        <div class="full-banner parallax text-start p-left">
            <img src="<?php echo $vshop_demo['p_banner_bg'];?>" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>2018</h2>
                            <h3>food market</h3>
                            <h4>special offer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- product-box slider -->
    <section class="section-b-space addtocart_count">
        <div class="full-box">
            <div class="container">
                <div class="title4">
                    <h2 class="title-inner4">special products</h2>
                    <div class="line"><span></span></div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="theme-card center-align">
                            <div class="offer-slider">
                                <div class="sec-1">
                                    <div class="product-box2">
                                        <div class="media">
                                            <a href="product-page(no-sidebar).html"><img
                                                    class="img-fluid blur-up lazyload"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/1.jpg" alt=""></a>
                                            <div class="media-body align-self-center">
                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <a href="product-page(no-sidebar).html">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box2">
                                        <div class="media">
                                            <a href="product-page(no-sidebar).html"><img
                                                    class="img-fluid blur-up lazyload"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/2.jpg" alt=""></a>
                                            <div class="media-body align-self-center">
                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <a href="product-page(no-sidebar).html">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 center-slider">
                        <div>
                            <div class="offer-slider">
                                <div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/9.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    add to cart
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input type="text" name="quantity"
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-detail text-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="theme-card center-align">
                            <div class="offer-slider">
                                <div class="sec-1">
                                    <div class="product-box2">
                                        <div class="media">
                                            <a href="product-page(no-sidebar).html"><img
                                                    class="img-fluid blur-up lazyload"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/7.jpg" alt=""></a>
                                            <div class="media-body align-self-center">
                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <a href="product-page(no-sidebar).html">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box2">
                                        <div class="media">
                                            <a href="product-page(no-sidebar).html"><img
                                                    class="img-fluid blur-up lazyload"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/pro/5.jpg" alt=""></a>
                                            <div class="media-body align-self-center">
                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <a href="product-page(no-sidebar).html">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-box slider end -->


    <!-- blog section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title4">
                    <h4>recent story</h4>
                    <h2 class="title-inner4">from the blog</h2>
                    <div class="line"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog section-b-space pt-0 ratio2_3 slick-default-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-3 no-arrow">
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/blog/1.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/blog/2.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/blog/3.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables/blog/4.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->

    <?php get_footer(); ?>
   