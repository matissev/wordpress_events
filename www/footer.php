	<footer class="site-footer">
		<nav>
			<?php 
				$args = array (
					'theme_location' => 'footer'
				);
			?>

			<?php wp_nav_menu($args); ?>
		</nav>

		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
	</footer>
	</div>
	<!--removeIf(production)-->
		<script type='text/javascript' id="__bs_script__">//<![CDATA[
		document.write("<script async src='/wp-content/themes/custom/assets/js/browser-sync.js'><\/script>");
		//]]></script>
	<!--endRemoveIf(production)-->
</body>
</html>