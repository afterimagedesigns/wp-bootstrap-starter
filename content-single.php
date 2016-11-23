<?php
/**
 * The template used for displaying post content in single.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="entry-content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'wp-bootstrap-starter' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->