<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
            	<?php 
            	
            		if ( get_theme_mod( 'bottom_footer_setting' ) ) {

            			$allowed_html = [
						    'a'      => [
						        'href'  => [],
						        'title' => [],
						    ],
						    'br'     => [],
						    'em'     => [],
						    'strong' => [],
						];
            			
            			echo wp_kses( get_theme_mod( 'bottom_footer_setting' ), $allowed_html ); 

            		} else {

            	?>
	                &copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php printf( esc_html( '%s', 'wp-bootstrap-starter' ), get_bloginfo ( 'name' ) ); ?></a>
	                <span class="sep"> | </span>
	                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><?php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

	            <?php } ?>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>