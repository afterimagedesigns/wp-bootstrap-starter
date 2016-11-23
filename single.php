<?php
/**
 * Page Template - This template is used as the default template of the page
 *
 */
get_header(); ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-9">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				// End the loop.
				endwhile;
				?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>