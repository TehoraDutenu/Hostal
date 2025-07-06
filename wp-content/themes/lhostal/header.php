<!DOCTYPE html>
<html lang="fr" id="hostal">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="icon" href="<?php echo get_template_directory_uri() . '/favicon.ico'; ?>" type="image/x-icon">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
	<!-- Bootstrap Icons -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">        <!-- Styles -->
    <!-- Mes styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/header.css"; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/frontpage.css"; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/footer.css"; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/menus.css"; ?>">

	<title>L'Hostal</title>

	<?php wp_head(); ?>

</head>

<body>

<!-- Header -->
	<header class="header">
		<div class="overlay"></div> <!-- voile noir -->
		<div class="logo-cont text-center">
			<a href="<?php echo get_bloginfo('wpurl'); ?>">
				<img class="nom" src="<?php echo get_template_directory_uri(); ?>/img/logo-catalan.png" alt="L'Hostal">
			</a>
			<h3>CASTELNOU</h3>
			<img class="separateur" src="<?php echo get_template_directory_uri(); ?>/img/separateur.png" alt="séparateur">
			<a class="tel" href="tel:+33468534542">04 68 53 45 42</a>

			<!-- Bouton menus -->
			 <?php wp_nav_menu([
				"theme_location" => "menu-sup",
				"container" => "nav",
				"container_class" => "navbar navbar-expand-lg navbar-light",
				"menu_class" => "navbar-nav mr-auto",
				"menu-id" => " ",
				"walker" => new hostal_walker(),
			 ]);?>
		</div>
	</header>

	
