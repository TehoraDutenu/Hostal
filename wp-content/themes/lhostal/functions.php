<?php

/* Fonction d'ajout de JS */

function theme_enqueue_scripts() {
	// Enfile ta feuille de style principale (si pas déjà fait)
	wp_enqueue_style('theme-style', get_stylesheet_uri());
  
	// Enfile ton fichier JS
	wp_enqueue_script(
	  'custom-animations',
	  get_template_directory_uri() . '/js/animations.js',
	  array(), // dépendances (ex: array('jquery')) si besoin
	  false,
	  true // charger dans le footer
	);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
  