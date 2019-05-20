<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tresse_Creativos
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer content-all">
		<nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'social-menu',
				'menu_id'        => 'social-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s redes">%3$s</ul>'
			) );
			?>
		</nav><!-- #social-menu -->
		<address class="company-details">
			<div><a href="tel:+573125301090">+57 312 530 10 90</a></div>
			<div><a href="mailto">aforerom@tressesc.com</a></div>
			<div>Bogotá • Colombia</div>
		</address>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tresse' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'tresse' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tresse' ), 'tresse', '<a href="http://underscores.me/">Julian Castillo Prada</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
