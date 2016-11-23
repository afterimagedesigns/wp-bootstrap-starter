<?php
/**
 * The template for displaying comments
 */

if ( post_password_required() )
	return;
?>

	<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<header>
			<h2 class="comments-title">
				<?php
					printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'wp-bootstrap-starter' ),
						number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
			</h2>
		</header>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h5 class="screen-reader-text"><?php _e( 'Comment navigation', 'wp-bootstrap-starter' ); ?></h5>
			<ul class="pager">
				<li class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wp-bootstrap-starter' ) ); ?></li>
				<li class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wp-bootstrap-starter' ) ); ?></li>
			</ul>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list media-list">
			<?php
				wp_list_comments();
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'wp-bootstrap-starter' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wp-bootstrap-starter' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wp-bootstrap-starter' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'wp-bootstrap-starter' ); ?></p>
	<?php endif; ?>

	<?php comment_form( $args = array(
			  'id_form'           => 'commentform',  // that's the wordpress default value! delete it or edit it ;)
			  'id_submit'         => 'commentsubmit',
			  'class_submit'         => 'btn btn-primary',
			  'title_reply'       => __( 'Leave a Reply', 'wp-bootstrap-starter' ),  // that's the wordpress default value! delete it or edit it ;)
			  'title_reply_to'    => __( 'Leave a Reply to %s', 'wp-bootstrap-starter' ),  // that's the wordpress default value! delete it or edit it ;)
			  'cancel_reply_link' => __( 'Cancel Reply', 'wp-bootstrap-starter' ),  // that's the wordpress default value! delete it or edit it ;)
			  'label_submit'      => __( 'Post Comment', 'wp-bootstrap-starter' ),  // that's the wordpress default value! delete it or edit it ;)
			  'comment_field' =>  '<p><textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
			  'comment_notes_after' => '<p class="form-allowed-tags">' .
				__( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'wp-bootstrap-starter' ) .
				'</p><div class="alert alert-info">' . allowed_tags() . '</div>'
	));
	?>

</div><!-- #comments -->