<?php
function bored_comment_form() {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'comment_author_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $fields = array(
		'author' => '<input id="name" name="name" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="Name*" placeholder="' . esc_attr__( 'Name', 'domain-name' ) . '"' . $aria_req . '>',
        'email'  => '<input name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr__( 'Email', 'domain-name' ) . '"' . $aria_req . '">',
        'url'  => '<input name="url" type="text" class="w-100" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Website', 'domain-name' ) . '"' . $aria_req . '">',
		 'cookies' => ' ',
		
                                           
    );
    $comments_args = array(
        'fields' => $fields,
        'title_reply'=> esc_html__( 'Leave a Comment', 'domain-name' ),
        'title_reply_before'    => '<h4 class="h7">',
        'title_reply_after'     => '</h4>',
        'label_submit'  => esc_html__( 'Submit Comment', 'domain-name' ),
		'class_submit' => 'default-button',
        'comment_notes_before'  => ' ',
        'comment_field' => '<textarea id="comment-reply" name="comment" rows="7" placeholder="' . esc_attr__( 'Type Your Comment Here*', 'domain-name' ) . '"></textarea>',
        'comment_notes_after' => '',
    );
    comment_form( $comments_args );
}