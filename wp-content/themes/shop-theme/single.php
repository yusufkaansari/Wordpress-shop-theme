<?php get_header(); ?>
<section class="bg-7 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                        
                                <h5><b><?php the_archive_description(); ?></b></h5>
                                <h3 class="mt-30 mb-15"><?php the_archive_title(); ?></h3>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="row">
                        <div class="col-md-12 col-lg-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
                                <div class="mb-50 mb-sm-30">
                                        <div class="pos-relative mb-30 pt-15">
                                                <div class="font-8 abs-tl p-20 bg-primary color-white">
                                                        <h4><b><?php echo get_the_date('d') ?></b></h4>
                                                        <h4><b><?php echo get_the_date('m') ?></b></h4>
                                                        <h4><b><?php echo get_the_date('y') ?></b></h4>
                                                        <div class="brdr-style-1"></div>
                                                </div>
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b></a></h4>
                                        <h6 class="mt-10 bg-lite-blue dplay-inl-block">
                                                <b class="plr-20 mtb-10"><?php the_author(); ?></b>
                                                <b class="plr-20 mtb-10 brder-lr-lite-black-2"><?php the_category(','); ?></b> </span>
                                                <b class="plr-20 mtb-10"><b><?php comments_number('0 Yorum',"1 Yorum","% Yorum"); ?></b>
                                        </h6>
                                        <p class="mt-30"><?php the_content(); ?></p>
                                </div><!--mb-30-->
       
<?php endwhile; else : _e( 'Üzgünüm, kriterlerinize uyan hiçbir gönderi yok.', 'textdomain' ); endif; ?>

                        </div><!--col-md-12-->

                </div><!-- row -->
        </div><!-- container -->
</section>
