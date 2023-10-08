<?php get_header(); ?> <!-- ayni dizindeki header.php dosyasi eklenir -->
<div class="sol">
    <div class="yazilar">
        <h1>"<?php the_search_query(); ?>" için rama sonuçları</h1></br>
        <?php
        while(have_posts()) : the_post();
        ?>
        <div class="yazi">
            <h2 class="baslik"><a href="<?php echo(get_permalink()); ?>"><?php the_title(); ?></a></h2>
            <div class="yazi-icerik">
            <?php the_excerpt(); ?> 
            </div>
        </div>
        <?php
        endwhile;
        ?>
        			
    </div>

    <div class="sayfalama">
        <div class="sol-link">
        <?php previous_posts_link(); ?>
        </div>

        <div class="sag-link">
        <?php next_posts_link(); ?>
        </div>

    </div>


</div>

<?php get_sidebar();?>  <!-- ayni dizindeki header.php dosyasi eklenir -->

<?php get_footer(); ?>  <!-- ayni dizindeki footer.php dosyasi eklenir -->