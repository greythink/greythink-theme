<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Greythink_Theme
 */

?>

<footer id="colophon" class="site-footer container">

	<div class="footer-content-row row">

		<?php for($i=1; $i <= 4; $i++): ?>

			<div class="col-md-3 greythink-footer-col-<?php echo $i; ?>">
					<?php
						wp_nav_menu(array(
							'menu_class' => 'greythink-footer-menu',
							'container_class' => 'greythink-footer-menu-container-' . $i,
							'depth' => 1,
							'theme_location' => 'footer-menu-' . $i
						));
					?>
			</div>

		<?php endfor; ?>

	</div>  <!--footer-content-row-->

	<div class="row footer-credits-row">
		<div class="col-12 footer-credits-content">
			<div class="greythink-social">
				<a href="#" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
				<a href="#" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
				<a href="#" target="_blank"><i class="fab fa-instagram fa-lg fa-2x" data-fa-transform="shrink-4" data-fa-mask="fas fa-square"></i></a>
				<a href="#" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
			</div>
			<div class="greythink-credits">
						Made with <i class="fas fa-heart"></i> by <a href="#" target="_blank">Greythink.in</a>
			</div>
			<div class="greythink-rights-reserved">
				<i class="far fa-copyright"></i> <?php echo date("Y"); ?> Greythink.in. All Rights Reserved.
			</div>
		</div>
	</div>  <!-- footer-credits-row -->
</footer>  <!-- footer container -->

<?php wp_footer(); ?>

</body>
</html>
