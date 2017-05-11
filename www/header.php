<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!--removeIf(production)-->
	<div class="media-queries"></div>
	<div class="grid">
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div><div class="grid-gutter"></div>
		<div class="grid-column"></div>
	</div>
	<!--endRemoveIf(production)-->

	<div class="main-container">
		<header class="site-header">
			<h1>
				<a href="<?php echo home_url(); ?>">
					<?php bloginfo('name'); ?>
				</a>
			</h1>
			<p><?php bloginfo('description') ?></p>

			<nav>
				<?php 
					$args = array (
						'theme_location' => 'primary'
					);
				?>

				<?php wp_nav_menu($args); ?>
			</nav>
		</header>