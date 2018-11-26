<?php
/**
 * Created by PhpStorm.
 * User: Clément Hmich
 * Date: 02/10/2018
 * Time: 15:15
 */

add_action( 'wp_enqueue_scripts', 'enqueue_theme_css' );

function enqueue_theme_css()
{
	wp_enqueue_style(
		'theme',
		get_template_directory_uri() . '/dist/css/theme.css'
	);
}

// CUSTOM COMMENTS FORM

$args = array(
	'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
    'fields' => apply_filters( 'comment_form_default_fields', array(

		'author' =>
			'<p class="comment-form-author">' .
			'<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
			( $req ? '<span class="required">*</span>' : '' ) .
			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			'" size="30"' . $aria_req . ' /></p>',

		'email' =>
			'<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
			( $req ? '<span class="required">*</span>' : '' ) .
			'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			'" size="30"' . $aria_req . ' /></p>',

		'url' =>
			'<p class="comment-form-url"><label for="url">' .
			__( 'Website', 'domainreference' ) . '</label>' .
			'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
			'" size="30" /></p>'
	)

));
comment_form( $args );

// CUSTOM COMMENTS TEMPLATE
function my_comments_callback( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li id="li-comment-<?php comment_ID(); ?>" class="col-md-4">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment-content-test"><?php comment_text(); ?></div>
			<p><?php comment_date(); ?></p>
		</article>
	</li>
	<?php
}