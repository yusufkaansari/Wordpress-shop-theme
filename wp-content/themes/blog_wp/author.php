<?php get_header(); ?> <!-- ayni dizindeki header.php dosyasi eklenir -->
<div class="sol">
    <div class="yazilar">
        <!-- ilk once category sayfasi var mi diye bakip sonra archive sayfasina gidecektir -->
        <h2>Özel Yazar Sayfası</h2>
        <hr>
        <div>
            <strong><?php the_author_posts_link( ); ?></strong> İsimli Yazarın Yazıları
            <p><?php the_author_meta("description"); ?></p>
        </div>
        <hr>
        <?php
        while(have_posts()) : the_post();
        ?>
        <div class="yazi">
            <h2 class="baslik"><a href="<?php echo(get_permalink()); ?>"><?php the_title(); ?></a></h2>
            <div class="yazi-icerik">
            <?php the_content(); ?> 
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