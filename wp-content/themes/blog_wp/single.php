<?php get_header(); ?> <!-- ayni dizindeki header.php dosyasi eklenir -->
<div class="sol">
			<div class="yazilar">
				<div class="yazi">
					<h2 class="baslik"><a href="<?php echo(get_permalink()); ?>"><?php the_title(); ?></a></h2>
					<?php
					while(have_posts()) : the_post();
					?>
					<div class="detay">
						<span><?php the_date(); ?></span>
						<span><?php the_author_posts_link(); ?></span>
						<span class="kategori">
							<?php the_category(", "); ?>
						</span>
					</div>

					<div class="yazi-icerik">
					<?php the_content(); ?> 
				</div>
				</br>
				<?php the_tags(); ?>
				</div>
				<?php
				endwhile
				?>
			</div>

			<div class="yorumlar">
			<?php comments_template(); ?>
			</div>

		</div>

<?php get_sidebar();?>  <!-- ayni dizindeki header.php dosyasi eklenir -->

<?php get_footer(); ?>  <!-- ayni dizindeki footer.php dosyasi eklenir -->