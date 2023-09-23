<?php

// Css tanimlama
function cssekle(){
/* Font */
wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600', array(),1,'all');
wp_enqueue_style('fonts');
wp_register_style( 'webfont', get_template_directory_uri().'/fonts/beyond_the_mountains-webfont.css', array(),1,'all');
wp_enqueue_style('webfont');
/* Stylesheets  */
wp_register_style( 'bootstrap', get_template_directory_uri().'/plugin-frameworks/bootstrap.min.css', array(),1,'all');
wp_enqueue_style('bootstrap');
wp_register_style( 'swiper1', get_template_directory_uri().'/plugin-frameworks/swiper.css', array(),1,'all');
wp_enqueue_style('swiper1');
wp_register_style( 'ionicons', get_template_directory_uri().'/fonts/ionicons.css', array(),1,'all');
wp_enqueue_style('ionicons');
wp_register_style( 'styles', get_template_directory_uri().'/common/styles.css', array(),1,'all');
wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts','cssekle');

function jsekle(){
// JS tanimlamasi
wp_register_script( 'jquery1', get_template_directory_uri().'/plugin-frameworks/jquery-3.2.1.min.js', array(),1,1);
wp_enqueue_script('jquery1');
wp_register_script( 'bootstrap', get_template_directory_uri().'/plugin-frameworks/bootstrap.min.js', array(),1,1);
wp_enqueue_script('bootstrap');
wp_register_script( 'swiper2', get_template_directory_uri().'/plugin-frameworks/swiper.js', array(),1,1);
wp_enqueue_script('swiper2');
wp_register_script( 'scripts', get_template_directory_uri().'/common/scripts.js', array(),1,1);
wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts','jsekle');

// Görünüm -> Menüler Alanını aktif etmek
add_theme_support("menus");

// ust-menu değişkeni menüyü kullanmak için gerekecek
// Görünüm -> Menüler -> Menu ayarları kısmında bu "tema konumları"nda görünecek
register_nav_menus( array(
    'ust-menu' => __('Üst Menü','theme')
));

// Öne Çıkarılmış Görsel Alanı

add_theme_support('post-thumbnails');



/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	if ( ! is_single() ) {
		$more = sprintf( '... <a class="read-more" style="color:red" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( 'Devamını Oku', 'textdomain' )
		);
	}

	return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


?>