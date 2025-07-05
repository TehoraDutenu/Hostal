<?php

/* 
 * Template Name: Front Page
 */

get_header(); ?>

<main>
	<div class="fond_grill">
		<div class="first_bloc">
			<div class="bloc_img">
				<div class="band_horaires"> <!-- terrasse_enseigne-->
					<div class="overlay_1"></div>
					<h6><b>CUISINE CATALANE ~ BAR</b></h6>
					<h6><b>OUVERT TOUS LES JOURS DE 9h30 À 21h30</b></h6>
					<p>Cuisine ouverte de 12h à 21h30 non-stop sur réservation</p>
				</div>
				<div class="band_terrasse"> <!-- table_pierre -->
					<div class="overlay_1"></div>
					<h6><b>TERRASSE PANORAMIQUE</b></h6>
					<h6><b>LARGE CHEMINÉE INTÉRIEURE</b></h6>
				</div>
				<div class="band_grill">
					<div class="overlay_1"></div>
					<h6><b>GRILLADES ~ CARGOLADE<span class="asterisque">*</span></b></h6>
					<p><b>Tous les jours du 1er juillet au 31 août</b></p>
					<p class="asterisque"><b>* cargolade sur réservation</b></p>
				</div>
			</div>
			<div class="presentation">
				<img class="separateur_or" src="<?php echo get_template_directory_uri() . '/img/separateur_or.png'; ?>" alt="separateur">
				<div class="animation">
					<div class="presen_txt">
						<h3 style="color: #000;">L'HOSTAL</h3>
						<h6 style="color: #000;">RESTAURANT À CASTELNOU</h6>
						<img class="separateur_noir" src="<?php echo get_template_directory_uri() . '/img/separateur_noir.png'; ?>" alt="Séparateur">
						<p style="color: #000;">Le village médiéval de Castelnou s'érige au creux des Aspres depuis le Xe siècle. Un écrin naturel d'exception et un dédale de ruelles mystérieuses valent à cette commune d'être classée parmi les plus beaux villages de France.</p>
						<p style="color: #000;">Notre Chef Stéphane Illand vous propose chaque jour une carte et des suggestions de saison.</p>
						<p style="color: #000;">Du plat réconfortant devant la cheminée en hiver jusqu'à la grillade en terrasse durant l'été, nos spécialités sauront vous séduire toute l'année.</p>
					</div>
					<div class="presen_img">
						<img src="<?php echo get_template_directory_uri() . '/img/bougainvilier.jpeg'; ?>" alt="Entrée du restaurant">
					</div>
				</div>
			</div>
		</div>
		<div class="bandeau"></div>
		<div class="bloc_menu">
			<img class="separateur_or" style="margin-bottom: 2vh;" src="<?php echo get_template_directory_uri() . '/img/separateur_or.png'; ?>" alt="separateur">
			<div class="titre">
				<h3 style="color: #000">LA CARTE DU RESTAURANT</h3>
				<p>Au fil des saisons nous vous faisons découvrir notre carte mettant en avant les richesses de notre terroir. <br> <b>Retrouvez nos propositions de grillades sur place !</b></p>
			</div>
			<div class="cartes">
				<img class="epd" src="<?php echo get_template_directory_uri(). '/img/epd.jpg'; ?>" alt="Carte Restaurant">
			</div>
		
		</div>
	</div>
</main>

<?php get_footer(); ?>