<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BLight
 */

?>
<div class="post col-xl-12">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img src=" <?php the_post_thumbnail_url(); ?> "
                                                                             alt="..." class="img-fluid"></a></div>
        <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
                <div class="date meta-last"><?php blight_posted_on(); ?></div>
                <div class="category"><a href="<?php


					$cat = get_the_category();
					// Get the ID of a given category
					$category_id = get_cat_ID( $cat[0]->cat_name );

					// Get the URL of this category
					echo get_category_link( $category_id );


					?>"><?php echo $cat[0]->cat_name; ?></a></div>
            </div>
            <a href="<?php the_permalink(); ?>">
                <h3 class="h4"><?php the_title(); ?></h3></a>
            <p class="text-muted"><?php the_excerpt(); ?></p>
            <footer class="post-footer d-flex align-items-center"><a href="#"
                                                                     class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="<?php echo get_avatar( the_author_meta( 'ID' ), 32 ); ?>" alt="..."
                                             class="img-fluid"></div>
                    <div class="title"><span><?php blight_posted_by(); ?></span></div>
                </a>
                <div class="date"><i class="icon-clock"></i> <?php echo meks_time_ago(); ?></div>
                <div class="comments meta-last"><i class="icon-comment"></i><?php echo get_comments_number(); ?></div>
            </footer>
        </div>


        <hr>
    </article>
</div>
<!-- #post-<?php the_ID(); ?> -->


<!-- post -->







