   <!-- collection banner -->
    <section class="banner-padding absolute-banner pb-0">
        <div class="container absolute-bg">
            <div class="service p-0">
                <div class="row">
                      <?php 
                      global $vshop_demo;
                      $v_banner = $vshop_demo['v_banner'];
                    foreach($v_banner as $vbanner ): ?>


                          <div class="col-md-4 service-block">
                            <div class="media">                        

                              <img src="<?php echo $vbanner['image']; ?>" alt="">
                          </div>
                              <div class="media-body">
                                    <h4><?php echo $vbanner['title']; ?></h4>
                                    <p><?php echo $vbanner['description']; ?></p>
                                </div>
                        </div>

                       <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->
