<?php 

/**
 * Template Name: About Us
 */

 ?>

<?php get_header(); ?>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?php echo the_title(); ?></h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- about section start -->
    <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-section"><img src="<?php echo $vshop_demo['a_baanner_img']['url']; ?>"
                            class="img-fluid blur-up lazyload" alt=""></div>
                </div>
                <div class="col-sm-12">
                    <h4><?php echo $vshop_demo['banner_title']; ?>
                    </h4>
                    <p><?php echo $vshop_demo['banner_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!--Testimonial start-->
   <section class="testimonial small-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slide-2 testimonial-slider no-arrow">

                         <?php 
                         $testimonials = $vshop_demo['testimonial'];
                         $i = 0;
                         foreach($testimonials as $item):
                            if($testimonials['t_item_image'][$i] || $testimonials['t_item_name'][$i]):

                                   ?>
                          
                        <div>
                            <div class="media">
                                <div class="text-center">
                                    <img src="<?php echo $testimonials['t_item_image'][$i]['url'];?>" alt="#">
                                    <h5><?php echo $testimonials['t_item_name'][$i]; ?></h5>
                                                                      
                                    <h6><?php echo $testimonials['t_item_desig'][$i];?></h6>
                                </div>
                                <div class="media-body">
                                 <?php echo $testimonials['t_item_desc'][$i]; ?>
                                </div>
                            </div>
                        </div>

                 <?php 
                  endif;
                  $i++;
              endforeach;
                 ?>
                 
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial ends-->


    <!--Team start-->
     <?php if($vshop_demo['show_team_section']==1): ?>
    <section id="team" class="team section-b-space slick-default-margin ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Our Team</h2>
                    <div class="team-4">
                        <?php 
                            $team_members = $vshop_demo['team_member'];
                            foreach($team_members as $member):?>
                         
                        <div>
                            <div>
                                <img src="<?php echo $member['image']; ?>" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4><?php echo $member['title']; ?></h4>
                            <h6><?php echo $member['description']; ?></h6>
                        </div>
                    <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!--Team ends-->


    <!-- service section -->
    <?php if($vshop_demo['show_service_section']==1): ?>
    <div class="container about-cls section-b-space">
        <section class="service border-section small-section">
            <div class="row">
                <?php $v_banner = $vshop_demo['v_banner'];
                    foreach($v_banner as $vbanner ): ?>

                <div class="col-md-4 service-block">
                    <div class="media">
                       <img src="<?php echo $vbanner['image']; ?>" alt="">
                        <div class="media-body">
                            <h4><?php echo $vbanner['title']; ?></h4>
                            <p><?php echo $vbanner['description']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
<?php endif; ?>
    <!-- service section end -->
    <?php get_footer(); ?>