  <!-- blog section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title4">
                    <h4><?php echo $vshop_demo['blog_subtitle']; ?></h4>
                    <h2 class="title-inner4"><?php echo $vshop_demo['blog_title']; ?></h2>
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

                               <?php
                                  $args = array(
                                     'post_type' => 'post',
                                     'posts_per_page' => -1,
                                     'order' => 'DESC'
                                  );
                                  $query = new WP_Query($args);
                                     while($query -> have_posts()){
                                        $query ->the_post();?>
                                        
                                         <div class="col-md-12">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="classic-effect">
                                                    <div>
                                                        <img src="<?php the_post_thumbnail_url(); ?>"
                                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4><?php the_date(); ?></h4>
                                                <a href="#">
                                                    <p><?php echo wp_trim_words( get_the_content(), 8,);?></p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: <?php the_author(); ?> , <?php echo get_comments_number();?></h6>
                                            </div>
                                        </div>
                                              
                                     <?php }
                               
                               ?>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->
