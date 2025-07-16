<?php

/* 
 * Template Name: Menus
 */

get_header(); ?>

<main class="menus_main">
	<div class="menus_titre">
		<h3 style="color: #000">LA CARTE DU RESTAURANT</h3>
		<img class="separateur img-responsive" src="<?php echo get_template_directory_uri() . '/img/separateur_arm.png' ?>" alt="">
		<p>Au fil des saisons nous vous faisons découvrir notre carte mettant en avant les richesses de notre terroir. <br> <b>Retrouvez nos propositions de grillades sur place !</b></p>
	</div>

	<div class="menus_img">
		<?php
		if (have_posts()) :
			while(have_posts()) : the_post();
				the_content();
			endwhile;
		endif;
		?>
	</div>
</main>

<?php get_footer(); ?>