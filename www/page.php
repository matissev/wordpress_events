
<?php

get_header();

	if (have_posts()) :
		while (have_posts()) : the_post(); ?>

		<div class="page-section">

			<h2><?php the_title(); ?></h2>
			<h1>Hello</h1>
			<?php the_content(); ?>

		</div>

		<?php
		endwhile;
	else :
		echo '<p>Pas de contenu</p>';
	endif;

get_footer();

?>