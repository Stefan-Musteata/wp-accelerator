<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<header class="header mb-4 pb-2 text-center">
		<?php if ( is_singular() ) : ?>
			<h1 class="title"><?php the_title(); ?></h1>
		<?php else : ?>
			<h2 class="title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
		<?php endif; ?>
		<p class="meta">
			<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
				<?php echo esc_html( get_the_date() ); ?>
			</time>
		</p>
	</header>

	<?php if ( has_post_thumbnail() && is_singular() ) : ?>
		<div class="thumb">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
	<?php endif; ?>

	<div class="content prose">
		<?php
		if ( is_singular() ) {
			the_content();
		} else {
			the_excerpt();
		}
		?>
	</div>

	<?php if ( ! is_singular() ) : ?>
		<p><a class="btn btn-outline-primary" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Citește articolul', 'digital-accelerator' ); ?></a></p>
	<?php endif; ?>
</article>
