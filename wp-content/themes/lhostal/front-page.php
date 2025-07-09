<?php

/* 
 * Template Name: Front Page
 */

get_header(); ?>

<main>
	<div class="fond_grill">
		<div class="first_bloc">
			<div class="bloc_img">
				<div class="band_horaires"> 
					<div class="overlay_1"></div>
					<h5><b>CUISINE CATALANE ~ BAR</b></h5>
					<h5><b>OUVERT TOUS LES JOURS DE 9h30 À 21h30</b></h5>
					<p>Cuisine ouverte de 12h à 21h30 non-stop sur réservation</p>
				</div>
				<div class="band_terrasse"> 
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
				<div class="animation">
					<div class="presen_txt">
						<h3 style="color: #000;">L'HOSTAL</h3>
						<h6 style="color: #000;">RESTAURANT À CASTELNOU</h6>
						<img class="separateur_noir img-responsive" src="<?php echo get_template_directory_uri() . '/img/separateur_noir.png'; ?>" alt="Séparateur">
						<p style="color: #000;">Le village médiéval de Castelnou s'érige au creux des Aspres depuis le Xe siècle. Un écrin naturel d'exception et un dédale de ruelles mystérieuses valent à cette commune d'être classée parmi les plus beaux villages de France.</p>
						<p style="color: #000;">Notre Chef Stéphane Illand vous propose chaque jour une carte et des suggestions de saison.</p>
						<p style="color: #000;">Du plat réconfortant devant la cheminée en hiver jusqu'à la grillade en terrasse durant l'été, nos spécialités sauront vous séduire toute l'année.</p>
					</div>
					<div class="presen_img">
						<img class="img-responsive" src="<?php echo get_template_directory_uri() . '/img/bougainvilier.jpeg'; ?>" alt="Entrée du restaurant">
					</div>
				</div>
			</div>
		<div class="bandeau_1"></div>
		<div class="bloc_menu">
			<div class="titre">
				<h3 style="color: #000">LA CARTE DU RESTAURANT</h3>
				<p style="color: #000">Au fil des saisons nous vous faisons découvrir notre carte mettant en avant les richesses de notre terroir. <br> <b>Retrouvez nos propositions de grillades sur place !</b></p>
				<img class="separateur_noir img-responsive" src="<?php echo get_template_directory_uri() . '/img/separateur_noir.png'; ?>" alt="Séparateur">
			</div>
			<div class="cartes">
				<!-- Bouton menus -->
				<?php wp_nav_menu([
					"theme_location" => "menu-sup",
					"container" => "nav",
					"container_class" => "navbar navbar-expand-lg navbar-light",
					"menu_class" => "navbar-nav mr-auto",
					"menu-id" => " ",
					"walker" => new hostal_walker(),
			 	]);?>

<!-- 				<img class="epd img-responsive" src="<?php echo get_template_directory_uri(). '/img/epd.jpg'; ?>" alt="Carte Restaurant">
				<img class="epd img-responsive" src="<?php echo get_template_directory_uri(). '/img/glaces_crêpes.jpg'; ?>" alt="Carte Restaurant">
 -->			</div>
		</div>
		<div class="bandeau_2"></div>
		<div class="bloc_groupes">
			<div class="presentation">
				<div class="animation">
					<div class="presen_img" id="salle">
						<img class="img-responsive" src="<?php echo get_template_directory_uri() . '/img/salle.jpg'; ?>" alt="Salle du restaurant">
					</div>
					<div class="presen_txt">
						<h3 id="pensez">PENSEZ À L'HOSTAL</h3>
						<h6 style="color: #000;">POUR VOS REPAS DE GROUPE</h6>
						<img class="separateur_noir img-responsive" src="<?php echo get_template_directory_uri() . '/img/separateur_noir.png'; ?>" alt="Séparateur">
						<p style="color: #000;">Stéphane et son équipe vous accueillent pour un moment de convivialité en groupe.</p>
						<p style="color: #000;">Notre Chef pourra vous proposer un menu sur mesure pour chacun de vos événements.</p>
						<p style="color: #000;">N'hésitez pas à nous contacter !</p>
						<div class="contacts">
							<a href="tel:+33468534542" class="groupes_tel">04 68 53 45 42</a>
							<a href="mailto:hostal66@hotmail.fr" class="groupes_mail">ENVOYER UN E-MAIL</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>