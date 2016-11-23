<?php
/**
 * Page Template - This template is used as the default template of the page
 *
 */
get_header(); ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-9">
				<section class="content-padder error-404 not-found">

					<header>
						<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', 'wp-bootstrap-starter' ); ?></h2>
					</header><!-- .page-header -->

					<div class="page-content">

						<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'wp-bootstrap-starter' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->

				</section><!-- .content-padder -->
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>