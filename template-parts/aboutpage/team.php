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