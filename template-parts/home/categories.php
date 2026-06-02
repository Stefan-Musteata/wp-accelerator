<?php if ( get_field( 'categorii' ) ) : ?>

	<?php $categorii = get_field( 'categorii' ); ?>

	<section class="section section--categories" id="sectiuni" aria-labelledby="categories-title">

		<div class="container">

			<header class="header mb-4 pb-2 text-center">

				<?php if ( ! empty( $categorii['title'] ) ) : ?>

					<h2 class="title" id="categories-title"><?php echo esc_html( $categorii['title'] ); ?></h2>

				<?php endif; ?>

			</header>



			<?php if ( ! empty( $categorii['items'] ) ) : ?>

				<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-center categories-grid">

					<?php foreach ( $categorii['items'] as $item ) : ?>

						<?php

						$link = ! empty( $item['link'] ) ? $item['link'] : '#';

						if ( is_array( $link ) && ! empty( $link['url'] ) ) {

							$link = $link['url'];

						}

						?>

						<div class="col">

							<a class="category-card" href="<?php echo esc_url( $link ); ?>">

								<?php if ( ! empty( $item['img'] ) ) : ?>

									<div class="icon">

										<img

											src="<?php echo esc_url( is_array( $item['img'] ) ? $item['img']['url'] : $item['img'] ); ?>"

											alt=""

											aria-hidden="true"

										>

									</div>

								<?php endif; ?>



								<?php if ( ! empty( $item['title'] ) ) : ?>

									<h3 class="title"><?php echo esc_html( $item['title'] ); ?></h3>

								<?php endif; ?>



								<span class="sep" aria-hidden="true"></span>



								<?php if ( ! empty( $item['descr'] ) ) : ?>

									<p class="description"><?php echo esc_html( $item['descr'] ); ?></p>

								<?php endif; ?>



								<span class="accent" aria-hidden="true"></span>

							</a>

						</div>

					<?php endforeach; ?>

				</div>

			<?php endif; ?>

		</div>

	</section>

<?php endif; ?>

