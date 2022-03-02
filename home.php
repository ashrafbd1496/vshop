<?php 

/**
 * Template Name: blog
 */

 ?>
<?php get_header(); ?>

<body class="theme-color-1">

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>blog</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php home_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space blog-page ratio2_3">
        <div class="container">
            <div class="row">
                <!--Blog sidebar start-->
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="blog-sidebar">
                        <div class="theme-card">
                            <h4>Recent Blog</h4>
                            <ul class="recent-blog">
                                <li>
                                    <div class="media"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/blog/1.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h6>25 Dec 2018</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/blog/2.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h6>25 Dec 2018</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/blog/3.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h6>25 Dec 2018</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/blog/4.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h6>25 Dec 2018</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/blog/5.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h6>25 Dec 2018</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="theme-card">
                            <h4>Popular Blog</h4>
                            <ul class="popular-blog">
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>03 </span><span>may</span></div>
                                        <div class="media-body align-self-center">
                                            <h6>Injected humour the like</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                    <p>it look like readable English. Many desktop publishing text.</p>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>03 </span><span>may</span></div>
                                        <div class="media-body align-self-center">
                                            <h6>Injected humour the like</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                    <p>it look like readable English. Many desktop publishing text.</p>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>03 </span><span>may</span></div>
                                        <div class="media-body align-self-center">
                                            <h6>Injected humour the like</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                    <p>it look like readable English. Many desktop publishing text.</p>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>03 </span><span>may</span></div>
                                        <div class="media-body align-self-center">
                                            <h6>Injected humour the like</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                    <p>it look like readable English. Many desktop publishing text.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Blog sidebar start-->
                <!--Blog List start-->
                <div class="col-xl-9 col-lg-8 col-md-7 order-sec">
                    <?php $args = array(
                        'post_type'    => 'post',
                        'posts_per_page'    => -1,
                        'order'     => 'DESC',
                    ); 
                        $query = new WP_Query($args);
                            while($query -> have_posts()){
                                $query->the_post();

                              gt_set_post_view();
                                 ?>

                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h6><?php the_date(); ?></h6><a href="#">
                                        <h4><?php echo wp_trim_words( get_the_title(), 13,);?></h4>
                                    </a>
                                    <ul class="post-social">
                                        <li>Posted By : <?php the_author(); ?></li>
                                        <li><i class="fa fa-heart"></i><?php gt_get_post_view(); ?></li>
                                        <li><i class="fa fa-comments"></i> <?php echo get_comments_number();?></li>
                                    </ul>
                                    <?php echo wp_trim_words( get_the_content(), 40,);?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                   
                </div>
                <!--Blog List start-->
            </div>
        </div>
    </section>
    <!-- Section ends -->
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>