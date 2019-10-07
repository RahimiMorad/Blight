<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BLight
 */
//ob_start();
get_header();

//wp_safe_redirect( get_home_url());
?>

    <div class="container">
        <div class="row">

            <section class="posts-listing col-lg-12">

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 row-404">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blight' ); ?></h1>
                        </header><!-- .page-header -->
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'blight' ); ?></p>
	                    <?php
	                    get_search_form();

	                    ?>


                        <!-- .widget -->

						<?php
						/* translators: %1$s: smiley */
						$blight_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'blight' ), convert_smilies( ':)' ) ) . '</p>';

						?>

                    </div>
                    <div class="col-md-2"></div>
                </div><!-- .page-content -->
                <div class="row">

                    <div class="col-md-4">

                        <div class="contact-details">
							<?php
							the_widget( 'WP_Widget_Tag_Cloud' );

							?>

                        </div>
                    </div>
                    <div class="col-md-4">
						<?php the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$blight_archive_content" ); ?>

                    </div>
                    <div class="col-md-4">
                        <div class="widget widget_categories">
                            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'blight' ); ?></h2>
                            <ul>
								<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
                            </ul>
                        </div>
                    </div>

                </div>


            </section><!-- .error-404 -->

        </div><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
