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
		<div class="header-img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cc-logo.png" alt="logo" class="logo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cc-foto.png" alt="foto" class="foto">
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
				<li><a href="#" class="fa fa-instagram"></a></li>
				<li><a href="#" class="fa fa-facebook"></a></li>
				<li><a href="#" class="fa fa-linkedin"></a></li>
				<li><a href="#" class="fa fa-whatsapp"></a></li>
			</ul>
		</div>

	</header>