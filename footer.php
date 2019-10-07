<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BLight
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="main-footer">
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>	<?php echo __('&copy;', 'Blog and Blog') ?> <?php echo esc_html(date('Y')); ?> <?php bloginfo( 'name' ); ?>
                            . All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>Template By : <a href="https://wp-sultan.com" class="text-white">WP Sultan</a>
                            <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
