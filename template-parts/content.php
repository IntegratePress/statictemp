<?php
/**
 * Template part for displaying posts
 *
 * @package    WordPress/ClassicPress
 * @subpackage BS_Theme
 * @since      1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				BS_Theme\Tags\posted_on();
				BS_Theme\Tags\posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php BS_Theme\Tags\post_thumbnail(); ?>

	<div class="entry-content" itemprop="articleBody">
		<?php
		the_content( sprintf(
			wp_kses(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bs-theme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bs-theme' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<footer class="entry-footer">
		<?php BS_Theme\Tags\entry_footer(); ?>
	</footer>
</article>
