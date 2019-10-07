<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BLight
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="post-comments">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
	?>
        <header>
            <h3 class="h6">Post Comments<span class="no-of-comments"><?php comments_number();?></span></h3>
        </header>



    <ol class="comment-list">
		<?php
		wp_list_comments( array( 'callback' => 'func_comment_list' ) );
		?>
    </ol><!-- .comment-list -->


<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
    <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
        <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'flatsome' ); ?></h2>
        <div class="nav-links nex-prev-nav">
            <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'flatsome' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'flatsome' ) ); ?></div>
        </div><!-- .nav-links -->
    </nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation.
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() ) :
    ?>
    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'blight' ); ?></p>
	<?php
	endif;

	endif; // Check for have_comments().

	$fields = array(

		'author' =>
			'    <div class="row">
<div class="form-group col-md-6">
                        <input type="text" name="author" id="username" placeholder="Name" class="form-control">
                      </div>',

		'email' =>
			'<div class="form-group col-md-6">
                        <input type="email" name="email" id="email" placeholder="Email Address (will not be published)" class="form-control">
                      </div>',


	);
	$comments_args = array(
		// Change the title of send button
		'submit_button' => '<button type="submit" class="btn btn-secondary">Submit Comment</button>',


		'class_form'          => 'commenting-form',
		'label_submit'        => __( 'Send', 'textdomain' ),
		// Change the title of the reply section
		'title_reply'         => '<header>
                    <h3 class="h6">Leave a reply</h3>
                  </header>',
		// Remove "Text or HTML to be displayed after the set of comment fields".
		'comment_notes_after' => '',
		// Redefine your own textarea (the comment body).
		//'comment_field'       => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
		'fields'              => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'       => '<div class="form-group col-md-12">
                        <textarea name="comment" id="comment" placeholder="Type your comment" class="form-control"></textarea>
                      </div> 
',

	); ?>
    <div class="add-comment">
        <div>test</div>
		<?php comment_form( $comments_args ); ?>
    </div>

</div><!-- #comments -->
