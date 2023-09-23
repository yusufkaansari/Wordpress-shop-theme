<?php 
/* Template Name: Hakkımızda */ 
?>
<?php get_header(); ?>

<section class="bg-4 h-500x main-slider pos-relative" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-size:cover !important">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h2 class="mt-30 mb-15"><?php the_title(); ?></h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">

                <div class="row">
                        <div class="col-md-12">
                                <div class="mt-50 mt-sm-30 mb-50 mb-sm-30 center-text"> </div>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
        <h5 class="center-text mb-50 mb-sm-30 plr-25"><?php the_content () ?></h5>
    <?php    
    endwhile;
else :
    _e( 'Üzgünüm, kriterlerinize uyan hiçbir gönderi yok.', 'textdomain' );
endif;
?>
                                
                        </div>

                </div><!-- row -->


        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_url'); ?>/images/heading_logo.png" alt="">
                        <h2>Yorumlar</h2>
                </div>

                <div class="swiper-container" data-slide-effect="slide" data-autoheight="false" data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="3"
                     data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="false" data-swpr-responsive="[1, 2, 2, 2]">

                        <div class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text">
<?php // Check rows existexists.
if( have_rows('musteri_yorumlari') ): ?>

<?php // Loop through rows.
    while( have_rows('musteri_yorumlari') ) : the_row();

        // Load sub field value.
        $profil_resmi = get_sub_field('profil_resmi');
        $profil_adi = get_sub_field('profil_adi');
        $baslik = get_sub_field('baslik');
        $yorum = get_sub_field('yorum');
        // Do something...
        ?>

                                <div class="swiper-slide">
                                        <h4><?php echo $baslik ?></h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20"><?php echo $yorum ?></p>
                                        <img class="circle-60 mb-20 " src="<?php echo $profil_resmi ?>" alt="">
                                        <h6><b class="color-primary"><?php echo $profil_adi ?></b>,<b class="color-ash">Müşteri</b>
                                        </h6>
                                </div><!-- swiper-slide -->

    <?php endwhile; ?>
    
<?php endif; ?>

                                
                        </div><!-- swiper-wrapper -->

                        <div class="swiper-pagination"></div>
                </div><!-- swiper-container -->
        </div><!-- container -->
</section>

<section class="counter-section section center-text" id="counter">
        <div class="container">
                <div class="row">
                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30 ">
                                        <i class="mlr-auto mb-30  icon-gradient icon-pizza"></i>
                                        <h2><b><span class="counter-value" data-duration="400" data-count="574">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Pizza per day</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-sea-food"></i>
                                        <h2><b><span class="counter-value" data-duration="1400" data-count="14">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Sea Food Dshes</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-pasta"></i>
                                        <h2><b><span class="counter-value" data-duration="300"
                                                     data-count="3">0</span></b></h2>
                                        <h5 class="semi-black"><b>Pasta Chefs</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-salad"></i>
                                        <h2><b><span class="counter-value" data-duration="1000" data-count="52">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Salads per day</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                </div><!-- row-->
        </div><!-- container-->
</section><!-- counter-section-->

<?php get_footer(); ?>