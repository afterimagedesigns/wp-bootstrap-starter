<?php
/**
 * Main Template - This template is used as the default template of the page
 *
 */
get_header(); ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-9">

				<?php if ( have_posts() ) : 
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( 'content', get_post_format() );


					// End the loop.
					endwhile;
					the_posts_pagination();
				?>
				<?php else : ?>
					<?php get_template_part( 'no-results', 'index' ); ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>