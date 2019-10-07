<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BLight
 */

get_header();

setPostViews(get_the_ID());
?>

    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <main class="post blog-post col-lg-<?php

			if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				echo "12";
			} else {
				echo "8";
			}


			?>">


						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content-single', get_post_type() );

//							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
                        ?>

                        <?php

							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

            </main><!-- #main -->
	        <?php get_sidebar(); ?>
        </div><!-- #primary -->
    </div>

<?php
get_footer();
