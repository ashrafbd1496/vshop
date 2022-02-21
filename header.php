<!DOCTYPE html>
<html lang="en">

<?php wp_head(); ?>

<body class="theme-color-1">
<?php global $vshop_demo; ?>
<!-- header start -->
<header class="header-2">
<div class="mobile-fix-option"></div>
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-contact">
                    <ul>
                        <li><?php echo $vshop_demo['welcome_text']; ?></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $vshop_demo['vshop_phone']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <ul class="header-dropdown">
                    <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    </li>
                    <li class="onhover-dropdown mobile-account"><i class="fa fa-user" aria-hidden="true"></i> My
                        Account
                        <ul class="onhover-show-div">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="main-menu border-section border-top-0">
                <div class="menu-left">
                    <div class="navbar"><a href="javascript:void(0)" onclick="openNav()"><i
                                class="fa fa-bars sidebar-bar" aria-hidden="true"></i></a>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                            <nav>
                                <a href="javascript:void(0)" onclick="closeNav()">
                                    <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2"
                                            aria-hidden="true"></i> Back</div>
                                </a>
                                <!-- Vertical Menu -->
                                <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                    <li><a href="#">clothing</a>
                                        <ul class="mega-menu clothing-menu">
                                            <li>
                                                <div class="row m-0">
                                                    <div class="col-xl-4">
                                                        <div class="link-section">
                                                            <h5>women's fashion</h5>
                                                            <ul>
                                                                <li><a href="#">dresses</a></li>
                                                                <li><a href="#">skirts</a></li>
                                                                <li><a href="#">westarn wear</a></li>
                                                                <li><a href="#">ethic wear</a></li>
                                                                <li><a href="#">sport wear</a></li>
                                                            </ul>
                                                            <h5>men's fashion</h5>
                                                            <ul>
                                                                <li><a href="#">sports wear</a></li>
                                                                <li><a href="#">western wear</a></li>
                                                                <li><a href="#">ethic wear</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="link-section">
                                                            <h5>accessories</h5>
                                                            <ul>
                                                                <li><a href="#">fashion jewellery</a></li>
                                                                <li><a href="#">caps and hats</a></li>
                                                                <li><a href="#">precious jewellery</a></li>
                                                                <li><a href="#">necklaces</a></li>
                                                                <li><a href="#">earrings</a></li>
                                                                <li><a href="#">wrist wear</a></li>
                                                                <li><a href="#">ties</a></li>
                                                                <li><a href="#">cufflinks</a></li>
                                                                <li><a href="#">pockets squares</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <a href="#" class="mega-menu-banner"><img
                                                                src="../assets/images/mega-menu/vegetable-fruits/1.jpg"
                                                                alt="" class="img-fluid blur-up lazyload"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">bags</a>
                                        <ul>
                                            <li><a href="#">shopper bags</a></li>
                                            <li><a href="#">laptop bags</a></li>
                                            <li><a href="#">clutches</a></li>
                                            <li><a href="#">purses</a>
                                                <ul>
                                                    <li><a href="#">purses</a></li>
                                                    <li><a href="#">wallets</a></li>
                                                    <li><a href="#">leathers</a></li>
                                                    <li><a href="#">satchels</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">footwear</a>
                                        <ul>
                                            <li><a href="#">sport shoes</a></li>
                                            <li><a href="#">formal shoes</a></li>
                                            <li><a href="#">casual shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">watches</a></li>
                                    <li><a href="#">Accessories</a>
                                        <ul>
                                            <li><a href="#">fashion jewellery</a></li>
                                            <li><a href="#">caps and hats</a></li>
                                            <li><a href="#">precious jewellery</a></li>
                                            <li><a href="#">more..</a>
                                                <ul>
                                                    <li><a href="#">necklaces</a></li>
                                                    <li><a href="#">earrings</a></li>
                                                    <li><a href="#">wrist wear</a></li>
                                                    <li><a href="#">accessories</a>
                                                        <ul>
                                                            <li><a href="#">ties</a></li>
                                                            <li><a href="#">cufflinks</a></li>
                                                            <li><a href="#">pockets squares</a></li>
                                                            <li><a href="#">helmets</a></li>
                                                            <li><a href="#">scarves</a></li>
                                                            <li><a href="#">more...</a>
                                                                <ul>
                                                                    <li><a href="#">accessory gift sets</a></li>
                                                                    <li><a href="#">travel accessories</a></li>
                                                                    <li><a href="#">phone cases</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">belts & more</a></li>
                                                    <li><a href="#">wearable</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">house of design</a></li>
                                    <li><a href="#">beauty & personal care</a>
                                        <ul>
                                            <li><a href="#">makeup</a></li>
                                            <li><a href="#">skincare</a></li>
                                            <li><a href="#">premium beaty</a></li>
                                            <li><a href="#">more</a>
                                                <ul>
                                                    <li><a href="#">fragrances</a></li>
                                                    <li><a href="#">luxury beauty</a></li>
                                                    <li><a href="#">hair care</a></li>
                                                    <li><a href="#">tools & brushes</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">home & decor</a></li>
                                    <li><a href="#">kitchen</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="brand-logo layout2-logo">
                    <a href="#"><img src="<?php echo $vshop_demo['site_logo']['url']; ?>" class="img-fluid blur-up lazyload"
                            alt=""></a>
                </div>
                <div class="menu-right pull-right">
                    <div class="icon-nav">
                        <ul>
                            <li class="onhover-div mobile-search">
                                <div><img src="../assets/images/icon/search.png" onclick="openSearch()"
                                        class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                        onclick="openSearch()"></i></div>
                                <div id="search-overlay" class="search-overlay">
                                    <div><span class="closebtn" onclick="closeSearch()"
                                            title="Close Overlay">×</span>
                                        <div class="overlay-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <form>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputPassword1"
                                                                    placeholder="Search a Product">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary"><i
                                                                    class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="onhover-div mobile-setting">
                                <div><img src="../assets/images/icon/setting.png"
                                        class="img-fluid blur-up lazyload" alt=""> <i class="ti-settings"></i>
                                </div>
                                <div class="show-div setting">
                                    <h6>language</h6>
                                    <ul>
                                        <li><a href="#">english</a></li>
                                        <li><a href="#">french</a></li>
                                    </ul>
                                    <h6>currency</h6>
                                    <ul class="list-inline">
                                        <li><a href="#">euro</a></li>
                                        <li><a href="#">rupees</a></li>
                                        <li><a href="#">pound</a></li>
                                        <li><a href="#">doller</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="onhover-div mobile-cart">
                                <div><img src="../assets/images/icon/cart.png"
                                        class="img-fluid blur-up lazyload" alt=""> <i
                                        class="ti-shopping-cart"></i></div>
                                <ul class="show-div shopping-cart">
                                    <li>
                                        <div class="media">
                                            <a href="#"><img class="me-3"
                                                    src="../assets/images/vegetables/pro/6.jpg" alt=""></a>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h4>item name</h4>
                                                </a>
                                                <h4><span>1 x $ 299.00</span></h4>
                                            </div>
                                        </div>
                                        <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a></div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="#"><img class="me-3"
                                                    src="../assets/images/vegetables/pro/9.jpg" alt=""></a>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h4>item name</h4>
                                                </a>
                                                <h4><span>1 x $ 299.00</span></h4>
                                            </div>
                                        </div>
                                        <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a></div>
                                    </li>
                                    <li>
                                        <div class="total">
                                            <h5>subtotal : <span>$299.00</span></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="buttons"><a href="cart.html" class="view-cart">view cart</a>
                                            <a href="#" class="checkout">checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-nav-center">
                <nav id="main-nav">
                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>

                     <?php 

                        wp_nav_menu(array(

                            'theme_location'    => 'main-menu',
                            'menu_class'    => 'sm pixelstrap sm-horizontal',
                            'depth' => 1,
                            'menu_id'   => 'main-menu',
                          
                    )); ?>

                    <!-- <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                        <li>
                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li><a href="<?php //echo site_url(); ?>">Home</a></li>
                       
                    </ul> -->
                </nav>
            </div>
        </div>
    </div>
</div>
</header>
<!-- header end -->

