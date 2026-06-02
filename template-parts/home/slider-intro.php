
<?php $slider_intro = get_field( 'slider_intro' ); ?>
<?php if ( ! empty( $slider_intro ) ) : ?>
<section class="slider-intro" id="acasa" aria-labelledby="home-main-title">
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php foreach ( $slider_intro as $index => $item ) : ?>
				<div class="swiper-slide slide">
					<?php if ( ! empty( $item['image'] ) ) : ?>
						<picture>
							<?php if ( ! empty( $item['image_mob'] ) ) : ?>
								<source media="(max-width: 650px)" srcset="<?php echo esc_url( $item['image_mob'] ); ?>">
							<?php endif; ?>
							<img
								class="img"
								src="<?php echo esc_url( $item['image'] ); ?>"
								alt="<?php echo esc_attr( $item['title'] ?? '' ); ?>"
							>
						</picture>
					<?php endif; ?>
					<div class="overlay" aria-hidden="true"></div>
					<div class="content">
						<?php if ( ! empty( $item['title'] ) ) : ?>
							<?php $heading_tag = 0 === (int) $index ? 'h1' : 'h2'; ?>
							<<?php echo esc_attr( $heading_tag ); ?> class="hero-title" <?php echo 0 === (int) $index ? 'id="home-main-title"' : ''; ?>>
								<?php echo esc_html( $item['title'] ); ?>
							</<?php echo esc_attr( $heading_tag ); ?>>
						<?php endif; ?>
						<?php if ( ! empty( $item['subtitle'] ) ) : ?>
							<p><?php echo esc_html( $item['subtitle'] ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev ms-4" aria-label="<?php esc_attr_e( 'Slide anterior', 'digital-accelerator' ); ?>"></div>
		<div class="swiper-button-next me-4" aria-label="<?php esc_attr_e( 'Slide următor', 'digital-accelerator' ); ?>"></div>
	</div>
</section>
<?php endif; ?>
