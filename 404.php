<?php
/**
 * 404 template.
 *
 * @package Digital_Accelerator
 */

get_header();
?>

<div class="page-header">
	<div class="container">
		<h1><?php esc_html_e( 'Pagina nu a fost găsită', 'digital-accelerator' ); ?></h1>
	</div>
</div>

<div class="container page-layout page-layout--single">
	<p><?php esc_html_e( 'Ne pare rău, conținutul pe care îl căutați nu există sau a fost mutat.', 'digital-accelerator' ); ?></p>
	<p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Înapoi la prima pagină', 'digital-accelerator' ); ?></a></p>
</div>

<?php
get_footer();
