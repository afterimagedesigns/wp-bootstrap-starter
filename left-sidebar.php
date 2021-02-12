<?php
/**
 * Template Name: Left Sidebar
 */

get_header();
get_sidebar();
?>
    <section id="primary" class="content-area col-sm-12 col-lg-8">
        <div id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            endwhile; // End of the loop.
            ?>

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
