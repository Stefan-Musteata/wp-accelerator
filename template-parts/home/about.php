<?php if ( get_field( 'about' ) ) : ?>
	<?php $about = get_field( 'about' ); ?>
	<section class="section section--about" id="despre" aria-labelledby="about-title">
		<div class="container">
			<div class="row align-items-center g-4 about-block">
				<div class="col-lg-6">
					<?php if ( ! empty( $about['image'] ) ) : ?>
						<img
							class="img img-fluid"
							src="<?php echo esc_url( is_array( $about['image'] ) ? $about['image']['url'] : $about['image'] ); ?>"
							alt="<?php echo esc_attr( $about['title'] ?? '' ); ?>"
						>
					<?php endif; ?>
				</div>
				<div class="col-lg-6">
					<div class="content">
						<?php if ( ! empty( $about['title'] ) ) : ?>
							<h2 class="title" id="about-title"><?php echo esc_html( $about['title'] ); ?></h2>
						<?php endif; ?>
						<?php if ( ! empty( $about['description'] ) ) : ?>
							<div class="description">
								<?php echo wp_kses_post( wpautop( $about['description'] ) ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
