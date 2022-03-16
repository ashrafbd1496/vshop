    <!--Testimonial start-->
   <section class="testimonial small-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slide-2 testimonial-slider no-arrow">

                         <?php 
                         global $vshop_demo;
                         $testimonials = $vshop_demo['testimonial_slide'];
                       
                         foreach($testimonials as $item):

                                   ?>
                          
                        <div>
                            <div class="media">
                                <div class="text-center">
                                    <img src="<?php echo $item['image'];?>" alt="#">
                                    <h5><?php echo $item['title']; ?></h5>
                                                                      
                                    <h6><?php echo $item['designation'];?></h6>
                                </div>
                                <div class="media-body">
                                 <?php echo $item['description']; ?>
                                </div>
                            </div>
                        </div>

                 <?php endforeach; ?>
                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial ends-->

