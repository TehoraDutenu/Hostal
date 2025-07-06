<?php

/* - Fonction register menu - */

function register_menu()
{
	/* Déclaration de menu */
	register_nav_menus(
		array(
			'menu-sup' => __('Menu sup')
		)
	);
}

add_action('init', 'register_menu');

/*  -- Reconstruire le menu -- */

class hostal_walker extends Walker_Nav_Menu
{
	public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
	{
		$title = $data_object->title;
		$permalink = $data_object->url;

		/* Template */
		$output .= "<div class='nav-item'>";
		$output .= "<a href='" . $permalink . "' class='nav-link'>";
		$output .= $title;
		$output .= "</a>";
	}

	public function end_el(&$output, $data_object, $depth = 0, $args = null)
	{	
		$output.= "</div>";
	}
}