<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;900&family=Titillium+Web:wght@300;400;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />




	<!-- Header Wordpress -->
	<?php wp_head(); ?>
	<!-- Fecha Header Wordpress -->

</head>

<body>
	<header class="header">
		<nav class="navbar">
			<ul class="nav-menu">
				<li class="nav-item">
					<a href="#" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>
			<div class="hamburguer">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
		</nav>
		<div class="header-img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cc-logo.png" alt="logo" class="logo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cc-foto.png" alt="foto1" class="foto1">
		</div>
		<div class="header-txt">
			<img class="bg-header" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cc-trans-destaque.png" alt="">
			<h1>MÚSICA BRASILEIRA DE ORIGEM E ESTILO</h1>
			<p>Conheça a trajetória do músico Carlinhos Cardozo and banda.</p>
			<div class="btn-wrapper">
				<button class="btn-header-1">DISCOVER NEW ALBUM</button>
				<button class="btn-header-2">DISCOVER MY HISTORY</button>
			</div>
			<ul class="social">
				<li><a href="https://www.instagram.com/carloscardozomusic/" class="fa fa-instagram" target="_blank"></a></li>
				<li><a href="https://www.facebook.com/carlos.cardozo.33" class="fa fa-facebook" target="_blank"></a></li>
				<li><a href="https://wa.me/16476282792" class="fa fa-whatsapp" target="_blank"></a></li>
			</ul>
		</div>

	</header>