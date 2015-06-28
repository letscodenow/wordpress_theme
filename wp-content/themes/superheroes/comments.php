<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package superheroes
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


<div id="comments" class="comments-area">
	<div class="comment-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comment-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( '1 comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'superheroes' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 83
				) );
			?>
		</ol><!-- .comment-list -->

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'superheroes' ); ?></p>
	<?php endif; ?>

	</div>

	<?php

	$fields =  array(

		'author' =>
			'<div class="row"><div class="col-md-6">
			<div class="form-control-wrapper">
					<input type="text" class="form-control empty" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '">
					<div class="floating-label">' . __( 'Your Name', 'domainreference' ) . '</div>
					<span class="material-input"></span>
			</div>',

		'email' =>
			'<div class="form-control-wrapper">
					<input type="email" class="form-control empty id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '">
					<div class="floating-label">' . __( 'Your Email', 'domainreference' ) . '</div>
					<span class="material-input"></span>
			</div>',

		'url' =>
			'<div class="form-control-wrapper">
					<input type="url" class="form-control empty" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					'">
					<div class="floating-label">' . __( 'Your Website', 'domainreference' ) . '</div>
					<span class="material-input"></span>
			</div>
			</div>',
		);

		if(!is_user_logged_in()){

			comment_form(array(
				"comment_notes_before" => "",
				"comment_notes_after" => "",
				"class_submit" => "btn btn-danger",
				"label_submit" => "Submit Comment",
				"comment_field" => '<div class="col-md-6">
					<div class="form-control-wrapper">
							<textarea name="comment" id="comment" class="form-control empty" cols="30" rows="10"></textarea>
							<div class="floating-label">' . _x( 'Your Comment', 'noun' ) . '</div>
							<span class="material-input"></span>
					</div>
					</div></div>',
				'fields' => apply_filters( 'comment_form_default_fields', $fields )
			));

		} else {

			comment_form(array(
				"comment_notes_before" => "",
				"comment_notes_after" => "",
				"class_submit" => "btn btn-danger",
				"label_submit" => "Submit Comment",
				"comment_field" => '<div class="row"><div class="col-md-12">
					<div class="form-control-wrapper">
							<textarea name="comment" id="comment" class="form-control empty" cols="30" rows="10"></textarea>
							<div class="floating-label">' . _x( 'Your Comment', 'noun' ) . '</div>
							<span class="material-input"></span>
					</div>
					</div></div>',
			));
		}

	?>

</div><!-- #comments -->
