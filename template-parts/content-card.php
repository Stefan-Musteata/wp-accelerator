<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="thumb" href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'medium_large' ); ?>
		</a>
	<?php endif; ?>
	<div class="body">
		<p class="meta">
			<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
				<?php echo esc_html( get_the_date() ); ?>
			</time>
		</p>
		<h3 class="title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<p class="excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
		<a class="more" href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Citește mai mult', 'digital-accelerator' ); ?> &rarr;
		</a>
	</div>
</article>
