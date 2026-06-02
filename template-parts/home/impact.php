<?php if ( get_field( 'impact' ) ) : ?>

	<?php $impact = get_field( 'impact' ); ?>

	<section class="section section--impact" id="impact" aria-labelledby="impact-title">

		<div class="container">

			<header class="header mb-4 pb-2 text-center">

				<?php if ( ! empty( $impact['title'] ) ) : ?>

					<h2 class="title" id="impact-title"><?php echo esc_html( $impact['title'] ); ?></h2>

				<?php endif; ?>

				<?php if ( ! empty( $impact['subtitle'] ) ) : ?>

					<p><?php echo esc_html( $impact['subtitle'] ); ?></p>

				<?php endif; ?>

			</header>



			<?php if ( ! empty( $impact['items'] ) ) : ?>

				<div class="row g-4 impact-grid">

					<?php foreach ( $impact['items'] as $item ) : ?>

						<div class="col-md-6">

							<article class="impact-card">

								<?php if ( ! empty( $item['img'] ) ) : ?>

									<div class="icon">

										<div class="icon-wrap">

											<img

												src="<?php echo esc_url( is_array( $item['img'] ) ? $item['img']['url'] : $item['img'] ); ?>"

												alt=""

												aria-hidden="true"

											>

										</div>

									</div>

								<?php endif; ?>

								<?php if ( ! empty( $item['descr'] ) ) : ?>

									<p class="description"><?php echo esc_html( $item['descr'] ); ?></p>

								<?php endif; ?>

							</article>

						</div>

					<?php endforeach; ?>

				</div>

			<?php endif; ?>

		</div>

	</section>

<?php endif; ?>

