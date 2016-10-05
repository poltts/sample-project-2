<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Sample project">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<header>
			<div class="row navbar-toggle" data-toggle="scroll" data-target=".navbar-scroll">
				<div class="col-xs-10 col-md-2">
					<div class="box-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png">
					</div>
					<div class="box-social-medias navbar-scroll scroll">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icon-fb.png">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icon-instagram.png">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icon-twitter.png">
					</div>
				</div> 
				<div class="col-xs-2 col-md-7">
					<div class="box-menu"></div>
					<div class="box-submenu overlay"></div>
				</div>
				<div class="col-md-2">
					<div class="box-search"></div>
					<div class="box-signature navbar-scroll scroll"></div>
				</div>
			</div>
		</header>
