<!DOCTYPE html>
	<html <?php language_attributes(); ?> >
		<head>
			<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">

			<title><?php bloginfo('name'); ?></title>
			<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?> >
			<header class="main_h">
				<div class="row">
					<a class="logo" href="http://localhost:8888/wordpress">Innovation Lab</a>

					<div class="mobile-toggle">
						<span></span>
						<span></span>
						<span></span>
					</div>

					<nav>
						<?php $args = array('theme_location' => 'primary'); ?>

						<?php wp_nav_menu($args); ?>
					</nav>
				</div>
			</header>