    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">
              <?php 
              global $vshop_demo;
              $v_slider = $vshop_demo['v_slide'];
                    foreach($v_slider as $vslide ): ?>
            <div>
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

        </div>
    </section>
    <!-- Home slider end -->
