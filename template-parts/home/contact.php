<?php
/**
 * Contact section.
 *
 * @package Digital_Accelerator
 */

$contact = da_get_contact_defaults();
?>

<section class="section section--contact section--alt" id="contact" aria-labelledby="contact-title">
	<div class="container">
		<header class="header mb-4 pb-2 text-center">
			<h2 class="title" id="contact-title"><?php esc_html_e( 'Contact', 'digital-accelerator' ); ?></h2>
			<p>
				<?php esc_html_e( 'Pentru mai multe informații despre Digital Accelerator, oportunități de colaborare sau acces la resursele proiectului, contactați echipa de implementare.', 'digital-accelerator' ); ?>
			</p>
		</header>

		<div class="contact-grid">
			<div class="contact-info">
				<dl>
					<?php if ( ! empty( $contact['email'] ) ) : ?>
						<dt><?php esc_html_e( 'Email', 'digital-accelerator' ); ?></dt>
						<dd><a href="mailto:<?php echo esc_attr( $contact['email'] ); ?>"><?php echo esc_html( $contact['email'] ); ?></a></dd>
					<?php endif; ?>

					<dt><?php esc_html_e( 'Website', 'digital-accelerator' ); ?></dt>
					<dd><a href="<?php echo esc_url( $contact['website'] ); ?>"><?php echo esc_html( $contact['website'] ); ?></a></dd>

					<?php if ( ! empty( $contact['facebook'] ) ) : ?>
						<dt><?php esc_html_e( 'Facebook', 'digital-accelerator' ); ?></dt>
						<dd><a href="<?php echo esc_url( $contact['facebook'] ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $contact['facebook'] ); ?></a></dd>
					<?php endif; ?>

					<dt><?php esc_html_e( 'Instituție coordonatoare', 'digital-accelerator' ); ?></dt>
					<dd><?php echo esc_html( $contact['institution'] ); ?></dd>
				</dl>
			</div>

			<div class="contact-form-wrap">
				<?php echo do_shortcode( '[contact-form-7 id="355" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</div>
</section>
