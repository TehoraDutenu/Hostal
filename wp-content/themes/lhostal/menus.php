<?php

/* 
 * Template Name: Menus
 */

get_header(); ?>

<main class="menus_main">
	<div class="menus_titre">
		<img class="separateur_or" style="margin-bottom: 2vh;" src="<?php echo get_template_directory_uri() . '/img/separateur_or.png'; ?>" alt="separateur">
		<h3 style="color: #000">LA CARTE DU RESTAURANT</h3>
		<p>Au fil des saisons nous vous faisons découvrir notre carte mettant en avant les richesses de notre terroir. <br> <b>Retrouvez nos propositions de grillades sur place !</b></p>
		<img class="separateur_menus_noir" src="<?php echo get_template_directory_uri() . '/img/separateur_noir.png'; ?>" alt="Séparateur">
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