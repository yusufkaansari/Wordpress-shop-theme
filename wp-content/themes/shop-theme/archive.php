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
                        <div class="col-md-7 col-lg-8">
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
                                        <p class="mt-30"><?php the_excerpt(); ?></p>
                                </div><!--mb-30-->
       
<?php endwhile; else : _e( 'Üzgünüm, kriterlerinize uyan hiçbir gönderi yok.', 'textdomain' ); endif; ?>

                                


                                <ul class="font-14 mb-30">
                                        <li class="color-primary"><a href="#"><b> 01.</b></a></li>
                                        <li><a href="#"><b> 02.</b></a></li>
                                        <li><a href="#"><b> 03.</b></a></li>
                                </ul>
                        </div><!--col-md-8-->

                        <div class="col-md-5 col-lg-4">
                                <div class="mx-w-400x mlr-auto">
                                        <form class="mb-50 mb-sm-30 mt-sm-30 placeholder-1 form-style-1 pos-relative">
                                                <input class="pr-50" type="text" placeholder="Search">
                                                <button class="abs-tbr plr-20" type="submit"><i class="ion-android-search"></i></button>
                                        </form>

                                        <div class="mb-50 mb-sm-30 pos-relative oflow-hidden">
                                                <div class="bg-trinagle-primary"></div>
                                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar-1-400x600.jpg" alt="">
                                                <div class="abs-bl font-18 color-white p-30 z-1">
                                                        <h4 class="lh-1">30%</h4>
                                                        <h4 class="lh-1">off</h4>
                                                        <h6 class="font-5 mt-10">Combo Pack <b>Pizza + Salad</b></h6>
                                                </div>
                                        </div><!--mb-50-->

                                        <div class="mb-50 mb-sm-30">
                                                <h5 class="left-text"><b>Subscribe to our newsletter</b></h5>
                                                <form class="placeholder-1 form-style-1 pos-relative">
                                                        <input class="mtb-20" type="text" placeholder="Your e-mail here">
                                                        <button class="w-100 btn-primaryc" type="submit">subscribe</button>
                                                </form>
                                        </div><!--mb-50-->

                                        <div class="mb-50 mb-sm-30">
                                                <h5 class="mb-30 left-text"><b>Latest Posts</b></h5>
                                                <div class="sided-90x mb-30 ">
                                                        <div class="s-left"><img class="br-3" src="<?php bloginfo('template_url'); ?>/images/sidebar-3-200x200.jpg" alt="Menu Image"></div>
                                                        <div class="s-right left-text">
                                                                <h6 class="color-semi-black">Recipes</h6>
                                                                <h6 class="font-11 mtb-5"><b>The best recipe for pasta</b></h6>
                                                                <h6 class="color-primary"><b>May  22, 2018</b></h6>
                                                        </div><!--s-right-->
                                                </div><!-- sided-90x -->

                                                <div class="sided-90x mb-30 ">
                                                        <div class="s-left"><img class="br-3" src="<?php bloginfo('template_url'); ?>/images/sidebar-4-200x200.jpg" alt="Menu Image"></div>
                                                        <div class="s-right left-text">
                                                                <h6 class="color-semi-black">Recipes</h6>
                                                                <h6 class="font-11 mtb-5"><b>The secret to amazing food</b></h6>
                                                                <h6 class="color-primary"><b>May  22, 2018</b></h6>
                                                        </div><!--s-right-->
                                                </div><!-- sided-90x -->

                                                <div class="sided-90x mb-30 ">
                                                        <div class="s-left"><img class="br-3" src="<?php bloginfo('template_url'); ?>/images/sidebar-5-200x200.jpg" alt="Menu Image"></div>
                                                        <div class="s-right left-text">
                                                                <h6 class="color-semi-black">Recipes</h6>
                                                                <h6 class="font-11 mtb-5"><b>Orange lemonade </b></h6>
                                                                <h6 class="color-primary"><b>May  22, 2018</b></h6>
                                                        </div><!--s-right-->
                                                </div><!-- sided-90x -->
                                        </div><!--mb-50-->

                                        <div class="mb-30 pos-relative">
                                                <img src="<?php bloginfo('template_url'); ?>/images/sidebar-2-400x600.jpg" alt="">
                                                <div class="font-23  ptb-15 abs-tlr-30 color-white center-text brdr-primary-3">
                                                        <div class="abs-tblr bg-black opacty-6 z--1"></div>
                                                        <h4><b>1 + 1</b></h4>
                                                        <h6 class="font-5 pb-15"><b>Buy one get one</b></h6>
                                                </div>
                                        </div><!--mb-50-->

                                </div><!--mx-w-500x-->
                        </div><!--col-md-4-->
                </div><!-- row -->
        </div><!-- container -->
</section>
