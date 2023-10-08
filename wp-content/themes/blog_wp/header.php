<!DOCTYPE html>
<html>
<head>
	<title>
		<?php if(is_home()){ echo "Anasayfa"; } wp_title(''); ?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/style.css">
<?php 
if (is_singular( )) {
	wp_enqueue_script("comment-reply");
}
wp_head(); 
?> <!-- wordpress head fonksiyonlarini ekler -->
</head>
<body>

<div class="site">
	<div class="ust">
		<div class="logo">
			<h1><a href="<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a></h1>
		</div>

		<div class="menu">
			<ul>
				<li><a href="<?php bloginfo("url"); ?>">Anasayfa</a></li>
				<?php wp_list_pages("title_li=&"); ?>
			</ul>
		</div>
	</div>

	<div class="govde">