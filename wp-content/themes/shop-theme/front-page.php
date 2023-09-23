<?php get_header(); ?>
<section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white">

<?php
$giris_alani = get_field('giris_alani');
?>

                                <h5><b><?php echo $giris_alani['slogan']; ?></b></h5>
                                <h1 class="mt-30 mb-15"><?php echo $giris_alani['baslik']; ?></h1>

                                <?php if($giris_alani['link']): ?>
                                <h5><a href="<?php echo $giris_alani['link']; ?>" class="btn-primaryc plr-25"><b><?php echo $giris_alani['link_adi']; ?></b></a></h5>
                                <?php endif; ?>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_url'); ?>/images/heading_logo.png" alt="">
<?php
$hikayemiz = get_field('hikayemiz');
?>
                        <h2><?php echo $hikayemiz['hikayemiz_baslik']; ?></h2>
                </div>

                <div class="row">
                        <div class="col-md-6">
                                <p class="mb-30"><?php echo $hikayemiz['sol_taraf']; ?></p>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                                <p class="mb-30"><?php echo $hikayemiz['sag_taraf']; ?></p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->
        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_url'); ?>/images/heading_logo.png" alt="">
                        <h2>Popüler Ürünler</h2>
                </div>

                <div class="row">
<?php if(have_rows('populer_urunler')): ?>
        <?php while(have_rows('populer_urunler')): the_row(); 
                $urun_resmi = get_sub_field('urun_resmi');             
                $urun_adi = get_sub_field('urun_adi');           
                $fiyat = get_sub_field('fiyat');    
                $link = get_sub_field('link');    
                $oneri = get_sub_field('oneri');             
                ?>

                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative">
                                                <?php if($oneri):?>
                                                <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>ÖNERİLEN</b></h6>
                                                <?php endif ?>
                                                <img src="<?php echo $urun_resmi;?>" alt="">
                                        </div>
                                        <h5 class="mt-20"><?php echo $urun_adi;?></h5>
                                        <h4 class="mt-5"><b><?php echo $fiyat;?>₺</b></h4>
                                        <h6 class="mt-20"><a href="<?php echo $link;?>" class="btn-brdr-primary plr-25"><b>Detay</b></a></h6>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->
                        
        <?php endwhile; ?>
<?php endif; ?>

                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>GÜNÜN MENÜSÜ</b></a></h6>
        </div><!-- container -->
</section>


<section>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_url'); ?>/images/heading_logo.png" alt="">
                        <h2>Menu</h2>
                </div>

                <div class="row">
                        <div class="col-sm-12">
                                <ul class="selecton brdr-b-primary mb-70">
                                        <li><a class="active" href="#" data-select="*"><b>HEPSİ</b></a></li>

                                        

<?php // Check rows existexists.
if( have_rows('pizza_menu') ): ?>

<?php // Loop through rows.
    while( have_rows('pizza_menu') ) : the_row();

        // Load sub field value.
        $kategori_adi = get_sub_field('kategori_adi');
        // Do something...
        ?>
        <li><a href="#" data-select="<?php echo sanitize_title($kategori_adi) ?>"><b><?php echo $kategori_adi ?></b></a></li>

    <?php  endwhile; ?>

<?php endif; ?>
                                        

                                        

                                </ul>
                        </div><!--col-sm-12-->
                </div><!--row-->

                <div class="row">

<?php // Check rows existexists.
if( have_rows('pizza_menu') ): ?>

<?php // Loop through rows.
    while( have_rows('pizza_menu') ) : the_row();

        // Load sub field value.
        $kategori_adi = get_sub_field('kategori_adi');
        // Do something...
        ?>
                        <div class="col-md-6 food-menu <?php echo sanitize_title($kategori_adi) ?>">

                        <?php // Check rows existexists.
                        if( have_rows('urunler') ): ?>

                        <?php // Loop through rows.
                        while( have_rows('urunler') ) : the_row();

                                // Load sub field value.
                                $urun_resmi = get_sub_field('urun_resmi');
                                $urun_adi = get_sub_field('urun_adi');
                                $fiyat = get_sub_field('fiyat');
                                $aciklama = get_sub_field('aciklama');
                                // Do something...
                                ?>


                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="<?php echo $urun_resmi ?>" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?php echo $urun_adi ?></b><b class="color-primary float-right"><?php echo $fiyat ?> ₺</b></h5>
                                                <p class="pr-70"><?php echo $aciklama ?> </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                                
                                <?php  endwhile; ?>

                                <?php endif; ?>        



                        </div><!-- food-menu -->

<?php  endwhile; ?>

<?php endif; ?>
                                              



                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
        </div><!-- container -->
</section>
<?php get_footer(); ?>