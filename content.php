<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h2 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    <?php get_template_part( 'postmeta' );?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      /* translators: %s: Name of current post */
      the_content( sprintf(
        __( 'Continue reading %s', 'wp-bootstrap-starter' ),
        the_title( '<span class="screen-reader-text">', '</span>', false )
      ) );

      wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'wp-bootstrap-starter' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'wp-bootstrap-starter' ) . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
    <?php if( has_tag() ) : ?>
    <span class="tags"><i class="fa fa-tags"></i> <?php the_tags(); ?></span>
  <?php endif; ?>

  <?php if( current_user_can( 'edit_others_posts' ) ) : ?>
    <span class="edit"><i class="fa fa-pencil-square-o"></i> <?php edit_post_link( __( 'Edit', 'wp-bootstrap-starter' ) ); ?></span>
  <?php endif; ?>
  </footer><!-- .entry-meta -->
</article><!-- #post-## -->