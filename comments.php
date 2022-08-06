<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$mr_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		?>
        <div class="blog-reviews">
            <h3 class="comments-title">
                <?php if ( '1' === $mr_comment_count ) : ?>
                    <?php esc_html_e( '1 comment', 'mr' ); ?>
                <?php else : ?>
                    <?php
                    printf(
                        /* translators: %s: Comment count number. */
                        esc_html( _nx( '%s comment', '%s comments', $mr_comment_count, 'Comments title', 'mr' ) ),
                        esc_html( number_format_i18n( $mr_comment_count ) )
                    );
                    ?>
                <?php endif; ?>
            </h3>
            <ul class="comment-list">
                <?php
                wp_list_comments(
                    array(
                        'avatar_size' => 60,
                        'style'       => 'ul',
                        // 'short_ping'  => true,
                    )
                );
                ?>
            </ul>
        </div>

		

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'mr' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
        // comment_form(
        //     array(
        //         'title_reply'        => esc_html__( 'Leave a comment', 'mr' ),
        //         'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
        //         'title_reply_after'  => '</h2>',
        //     )
        // );




        // $commenter = wp_get_current_commenter();
        // $req = get_option( 'require_name_email' );
        // $aria_req = ( $req ? " aria-required='true'" : '' );
        // $fields =  array(
        //     'title_reply'        => esc_html__( 'Leave a comment', 'mr' ),

        //     'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        //         '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
        //     'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        //         '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
        //     'website'  => '<p class="comment-form-url"><label for="website">' . __( 'Website' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        //         '<input id="website" name="website" type="text" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></p>',
        // );
        // $comments_args = array(
        //     'fields' =>  $fields,
        //     'label_submit' => 'Send My Comment'
        // );
        // comment_form($comments_args);




        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $fields =  array(
            'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
            'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
        );
        $comments_args = array(
            'fields' =>  $fields,
            'title_reply'=>'Please give us your valuable comment',
        );
        comment_form($comments_args);

        // function wpb_move_comment_field_to_bottom( $fields ) {
        //     $comment_field = $fields['comment'];
        //     unset( $fields['comment'] );
        //     $fields['comment'] = $comment_field;
        //     return $fields;
        // }
	?>

</div><!-- #comments -->
