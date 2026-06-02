<?php $beneficiaries = get_field( 'beneficiari' ); ?>
<?php if ( ! empty( $beneficiaries ) ) : ?>
<section class="section section--beneficiaries section--alt" id="beneficiari" aria-labelledby="beneficiaries-title">
	<div class="container">
		<header class="header mb-4 pb-2 text-center">
			<h2 class="title" id="beneficiaries-title"><?php echo esc_html( $beneficiaries['title'] ); ?></h2>
			<p class="section-lead mx-auto mb-0">
				<?php echo esc_html( $beneficiaries['subtitle'] ); ?>
			</p>
		</header>
		<div class="row g-4">
			<?php foreach ( $beneficiaries['items'] as $index => $item ) : ?>
				<?php $card_variant = 0 === $index % 2 ? 'bg-primary' : 'bg-purple'; ?>
				<div class="col-12 col-lg-6">
					<article class="beneficiary-card h-100">
						<p class="beneficiary-badge mb-3 text-white <?php echo esc_attr( $card_variant ); ?>"><?php echo esc_html( $item['subtitle'] ); ?></p>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['descr'] ); ?></p>
					</article>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>
