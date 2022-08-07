

<?php
    if ( post_password_required() ) {
        return;
    }
?>
<?php 
    if (get_comments_number() > 1) {
?>
<div id="comments" class="comments">
<?php } ?>
<?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h3>
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                printf( _x( '1 Comment', 'comments title', 'mr' ), get_the_title() );
            } else {
                printf(
                    _nx(
                        '%1$s Comment',
                        '%1$s Comments',
                        $comments_number,
                        'comments title',
                        'mr'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h3>

        <ul class="lab-ul comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'callback'   => 'mr_comment_template'
                ) );
            ?>
        </ul>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
        <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
            <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'mr' ); ?></h2>
            <div class="nav-links">
                <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'mr' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'mr' ) ); ?></div>
            </div>
        </nav>
    <?php
        endif; 
    endif;

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'mr' ); ?></p>
    <?php
    endif;

   
    ?>
<?php if (get_comments_number() > 1) 
    {
?>
    <?php
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $fields =  array(
            'author' => '<p class="comment-form-author">' . ( $req ? '<span class="required"></span>' : '' ) .
                '<input id="author" name="author" type="text" placeholder="Name*" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
            'email'  => '<p class="comment-form-email">' . ( $req ? '<span class="required"></span>' : '' ) .
                '<input id="email" name="email" type="text" placeholder="Email*" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
        );
        $comments_args = array(
            'fields' =>  $fields,
            'label_submit' => 'Send My Comment',
        );
        comment_form($comments_args);
	?>
</div>
<?php 
    }
?>

