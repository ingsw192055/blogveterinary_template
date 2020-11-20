<?php

$settings = get_fields('theme-options');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<title>
		<?php
		wp_title('|', false, 'right');
		?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="<?=get_home_url()?>"><?=$settings['logo']?></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<?php
				wp_nav_menu([
					'theme_location'	=> 'primary',
					'menu_class'        => 'navbar-nav ml-auto',
					'container'			=> 'ul',
					'add_li_class'		=> 'nav-item',
				]);
				?>
			</div>
		</div>
	</nav>
	<header class="masthead" style="background-image: url(<?php echo $settings["banner"]["url"]; ?>)">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<h1><?=$settings['testo_su_banner']?></h1>
						<span class="subheading"><?=$settings['sottotitolo_su_banner']?></span>
					</div>
				</div>
			</div>
		</div>
	</header>