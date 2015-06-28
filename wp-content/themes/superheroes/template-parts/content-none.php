<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package superheroes
 */

?>

<article class="post">
	<header class="article-title text-center">
			<h2><?php esc_html_e( 'Nothing Found', 'superheroes' ); ?></h2>
			<p class="post-meta">
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'superheroes' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?>

				<?php elseif ( is_search() ) : ?>

					<?php esc_html_e( 'Sorry, but nothing matched your search terms.', 'superheroes' ); ?>

				<?php else : ?>

					<?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'superheroes' ); ?>

				<?php endif; ?>
			</p>
	</header>
</article>
