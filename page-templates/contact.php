<?php 

/**
 * Template Name: Contact Page
 */

 ?>

<?php get_header(); ?>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?php the_title(); ?></h2>
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


    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 map">
         
                  <?php
                if ( is_active_sidebar( 'map_widget' ) ) {
                    dynamic_sidebar( 'map_widget' );
                }
                ?>

                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon">
                                  <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h6><?php echo $vshop_demo['contact_number_title'];?></h6>
                                </div>
                                <div class="media-body">
                                  <?php echo $vshop_demo['contact_number'];?>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h6><?php echo $vshop_demo['contact_address_title'];?></h6>
                                </div>
                                <div class="media-body">
                                   <?php echo $vshop_demo['contact_address'];?>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                   <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <h6><?php echo $vshop_demo['contact_address_title'];?></h6>
                                </div>
                                <div class="media-body">
                                    <?php echo $vshop_demo['contact_email'];?>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                    <h6><?php echo $vshop_demo['contact_fax_title'];?></h6>
                                </div>
                                <div class="media-body">
                                    <?php echo $vshop_demo['contact_fax'];?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <?php echo do_shortcode('[contact-form-7 id="153" title="contact page form"]'); ?>


                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

    <?php get_footer(); ?>