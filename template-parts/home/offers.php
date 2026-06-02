
<?php $offers = get_field( 'ce_ofera_programul' ); ?>
<?php if ( ! empty( $offers ) ) : ?>
<section class="section section--offers section--alt" id="ofera" aria-labelledby="offers-title">
	<div class="container">
		<header class="header mb-4 pb-2 text-center mb-4 pb-2">
			<h2 class="title" id="offers-title"><?php echo esc_html( $offers['title'] ); ?></h2>
		</header>
		<div class="row row-cols-1 row-cols-md-3 justify-content-center g-4">
			<?php foreach ( $offers['items'] as $item ) : ?>
				<article class="col">
					<div class="card h-100 offers-card p-0">
						<?php if ( ! empty( $item['img'] ) ) : ?>
							<img
								class="img"
								src="<?php echo esc_url( is_array( $item['img'] ) ? $item['img']['url'] : $item['img'] ); ?>"
								alt="<?php echo esc_attr( $item['title'] ?? '' ); ?>"
							>
						<?php endif; ?>
						<div class="card-body">
							<?php if ( ! empty( $item['title'] ) ) : ?>
								<h3 class="title"><?php echo esc_html( $item['title'] ); ?></h3>
							<?php endif; ?>
							<?php if ( ! empty( $item['descr'] ) ) : ?>
								<div class="description">
									<?php echo wp_kses_post( wpautop( $item['descr'] ) ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>
