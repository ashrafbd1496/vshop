    <!-- service section -->
    <?php 
    global $vshop_demo;
    if($vshop_demo['show_service_section']==1): ?>
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